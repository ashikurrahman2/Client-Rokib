<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Portfolio extends Model
{
    use HasFactory;

    private static $image, $imageName, $directory, $imageUrl;

    protected $fillable = [
        'title',
        'sub_title',
        'pro_link',
        'image',
    ];

    // Function to upload and resize image
    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        if (self::$image) {
            self::$imageName = time() . '_' . self::$image->getClientOriginalName();
            self::$directory = "upload/portfolio-images/";
            self::$image->move(self::$directory, self::$imageName);

            // Resize the image using Intervention Image
            $imageManager = new ImageManager(new Driver());
            $image = $imageManager->read(self::$directory . self::$imageName);
            $image->resize(800, 600);
            $image->save(self::$directory . self::$imageName);

            self::$imageUrl = self::$directory . self::$imageName;
            return self::$imageUrl;
        }
        return null;
    }

    // Create a new Portfolio entry
    public static function newPortfolio($request)
    {
        self::$imageUrl = $request->file('image') ? self::getImageUrl($request) : '';

        $portfolio = new self();
        self::saveBasicInfo($portfolio, $request, self::$imageUrl);
    }

    // Update an existing Portfolio entry
    public static function updatePortfolio($request, $id)
    {
        $portfolio = self::findOrFail($id);

        if ($request->file('image')) {
            if (file_exists($portfolio->image)) {
                unlink($portfolio->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = $portfolio->image;
        }

        self::saveBasicInfo($portfolio, $request, self::$imageUrl);
    }

    // Save or update basic info in the database
    private static function saveBasicInfo($portfolio, $request, $imageUrl)
    {
        $portfolio->image     = $imageUrl;
        $portfolio->title     = $request->title;
        $portfolio->sub_title = $request->sub_title;
        $portfolio->pro_link  = $request->pro_link;
        $portfolio->save();
    }

    // Delete a Portfolio entry
    public static function deletePortfolio($portfolio)
    {
        if (file_exists($portfolio->image)) {
            unlink($portfolio->image);
        }

        $portfolio->delete();
    }
}