<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'status',
    ];

    private static $directory, $image;

    // Image upload and resize helper
    private static function getImageUrl($imageFile, $directory, $resizeWidth = null, $resizeHeight = null)
    {
        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }

        $imageName = hexdec(uniqid()) . '.' . $imageFile->getClientOriginalExtension();
        $imageFile->move($directory, $imageName);

        if ($resizeWidth && $resizeHeight) {
            $imageManager = new ImageManager(new Driver());
            $img = $imageManager->read($directory . $imageName);
            $img->resize($resizeWidth, $resizeHeight);
            $img->save($directory . $imageName);
        }

        return $directory . $imageName;
    }

    // Create new Service
    public static function newService($request)
    {
        self::$directory = "upload/service/";

        if ($request->hasFile('image')) {
            self::$image = self::getImageUrl($request->file('image'), self::$directory, 500, 500);
        } else {
            self::$image = null;
        }

        $service = new self();
        self::saveServiceInfo($service, $request, self::$image);
    }

    // Update existing Service — $service must be an object, not an ID
    public static function updateService($request, Service $service)
    {
        self::$directory = "upload/service/";

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if (!empty($service->image) && file_exists(public_path($service->image))) {
                unlink(public_path($service->image));
            }
            self::$image = self::getImageUrl($request->file('image'), self::$directory, 500, 500);
        } else {
            // Keep existing image
            self::$image = $service->image;
        }

        self::saveServiceInfo($service, $request, self::$image);
    }

    // Save service data to database
    private static function saveServiceInfo($service, $request, $image)
    {
        $service->title       = $request->title;
        $service->image       = $image;
        $service->description = $request->description;
        $service->status      = $request->status ?? 1;
        $service->save();
    }

    // Delete Service and its image
    public static function deleteService(Service $service)
    {
        if (!empty($service->image) && file_exists(public_path($service->image))) {
            unlink(public_path($service->image));
        }

        $service->delete();
    }
}