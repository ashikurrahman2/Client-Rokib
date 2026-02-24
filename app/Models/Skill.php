<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = ['skill_name'];

    public static function newSkill($request)
    {
        $skill = new self();
        self::saveBasicInfo($skill, $request);
    }

    public static function updateSkill($request, $skill)
    {
        self::saveBasicInfo($skill, $request);
    }

    private static function saveBasicInfo($skill, $request)
    {
        $skill->skill_name = $request->skill_name;
        $skill->save();
    }

    public static function deleteSkill($skill)
    {
        $skill->delete();
    }
}