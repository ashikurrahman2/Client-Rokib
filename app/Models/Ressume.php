<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ressume extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'designation',
        'currentdesignation',
        'total_exp',
        'cover_letter',
        'company_name',
        'current_status',
    ];

    public static function newRessume($request)
    {
        $ressume = new self();
        self::saveBasicInfo($ressume, $request);
    }

    public static function updateRessume($request, $ressume)
    {
        self::saveBasicInfo($ressume, $request);
    }

    private static function saveBasicInfo($ressume, $request)
    {
        $ressume->name               = $request->name;
        $ressume->designation        = $request->designation;
        $ressume->currentdesignation = $request->currentdesignation;
        $ressume->total_exp          = $request->total_exp;
        $ressume->cover_letter       = $request->cover_letter;
        $ressume->company_name       = $request->company_name;
        $ressume->current_status     = $request->current_status;
        $ressume->save();
    }

    public static function deleteRessume($ressume)
    {
        $ressume->delete();
    }
}