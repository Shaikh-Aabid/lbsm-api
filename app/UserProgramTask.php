<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProgramTask extends Model
{
    protected $fillable = [
        'site_id',
        'user_id',
        'program_id',
        'program_task_id',
        'marks_obtained',
        'is_completed',
        'completion_date',
        'user_program_id',
        'imagepath1',
        'imagepath2',
        'imagepath3',
        'imagepath4',
    ];
    public function site()
    {
        return $this->belongsTo(Site::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
    public function program_task()
    {
        return $this->belongsTo(ProgramTask::class);
    }
    public function user_program()
    {
        return $this->belongsTo(UserProgram::class);
    }
}
