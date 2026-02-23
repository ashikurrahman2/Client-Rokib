<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'video_url',
        'slider_image',
        'caption_text',
        'heading_text',
    ];

    private static $directory, $videoUrl, $sliderImage;

    // Function to upload and store image
    private static function getImageUrl($imageFile, $directory, $resizeWidth = null, $resizeHeight = null)
    {
        $imageName = hexdec(uniqid()) . '.' . $imageFile->getClientOriginalExtension();
        $imageFile->move($directory, $imageName);

        if ($resizeWidth && $resizeHeight) {
            $imageManager = new ImageManager(new Driver());
            $image = $imageManager->read($directory . $imageName);
            $image->resize(500, 500);
            $image->save($directory . $imageName);
        }

        return $directory . $imageName;
    }

    // Function to upload and store video
    private static function getVideoUrl($videoFile, $directory)
    {
        $videoName = hexdec(uniqid()) . '.' . $videoFile->getClientOriginalExtension();
        $videoFile->move($directory, $videoName);
        return $directory . $videoName;
    }

    // Create a new Slider entry
    public static function newSlider($request)
    {
        self::$directory = "upload/slider/";

        if ($request->hasFile('slider_image')) {
            self::$sliderImage = self::getImageUrl($request->file('slider_image'), self::$directory, 1920, 1080);
        } else {
            self::$sliderImage = null;
        }

        if ($request->hasFile('video_url')) {
            self::$videoUrl = self::getVideoUrl($request->file('video_url'), self::$directory);
        } else {
            self::$videoUrl = null;
        }

        $slider = new self();
        self::saveSliderInfo($slider, $request, self::$videoUrl, self::$sliderImage);
    }

    // Update an existing Slider entry
    public static function updateSlider($request, $slider)
    {
        self::$directory = "upload/slider/";

        if ($request->hasFile('slider_image')) {
            if (file_exists($slider->slider_image)) {
                unlink($slider->slider_image);
            }
            self::$sliderImage = self::getImageUrl($request->file('slider_image'), self::$directory, 1920, 1080);
        } else {
            self::$sliderImage = $slider->slider_image;
        }

        if ($request->hasFile('video_url')) {
            if (file_exists($slider->video_url)) {
                unlink($slider->video_url);
            }
            self::$videoUrl = self::getVideoUrl($request->file('video_url'), self::$directory);
        } else {
            self::$videoUrl = $slider->video_url;
        }

        self::saveSliderInfo($slider, $request, self::$videoUrl, self::$sliderImage);
    }

    // Save or update slider info in the database
    private static function saveSliderInfo($slider, $request, $videoUrl, $sliderImage)
    {
        $slider->video_url    = $videoUrl;
        $slider->slider_image = $sliderImage;
        $slider->caption_text = $request->caption_text;
        $slider->heading_text = $request->heading_text;
        $slider->save();
    }

    // Delete a Slider entry
    public static function deleteSlider($slider)
    {
        if (file_exists($slider->slider_image)) {
            unlink($slider->slider_image);
        }

        if (file_exists($slider->video_url)) {
            unlink($slider->video_url);
        }

        $slider->delete();
    }
}