<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Job extends Model{
    use HasFactory;
    protected $table = "job_listings";

    // protected $fillable = ['title','salary', 'employer_id'];
    protected $guarded = [];

    public function employer(){
        return $this->belongsTo(Employer::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id'); //specify
    }

    // public static function all():array 
    // {
    // //    return [
    // //         [
    // //             'id' => 1,
    // //             'title' => 'Director',
    // //             'salary' =>'50000'
    // //         ],
    // //         [
    // //             'id' => 2,
    // //             'title' => 'Executive',
    // //             'salary' => '100000'
    // //         ],
    // //         [
    // //             'id' => 3,
    // //             'title' => 'Teacher',
    // //             'salary' => '33000'
    // //         ]
    // //         ];
    // }
    // public static function find(int $id):array{
    //     $job = \Illuminate\Support\Arr::first(static::all(), fn($job) => $job['id']== $id);
    //     if(!$job){
    //         abort(404);
    //     }
    //     return $job;
        
    // }
}

