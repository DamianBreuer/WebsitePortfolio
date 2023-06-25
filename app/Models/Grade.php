<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public function addGrade($grade) {
        if ($grade > $this->best_grade) {
            $this->best_grade = $grade;
            if ($this->best_grade < $this->lowest_passing_grade) {
                $this->passed_at = null;
            } else {$this->best_grade >= $this->lowest_passing_grade;
                    if ($this->passed_at == null) {
                        $this->passed_at = now();
                    }
            }
        }
    }
    public $guarded = [];
}
