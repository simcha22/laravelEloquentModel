<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // שדות שמקבלים מידע
    protected $fillable = ['title', 'article_text', 'user_id'];

    // שדות שלא מקבלים מידע
    protected $guarded = ['id'];

    // // כדי שהמודול יצביע על טבלה אחרת
    // protected $table = 'article';

    // // המפתח של הטבלה הוא לא id רגיל
    // protected $primaryKey = 'article_id';

    // public $incrementing = false;

    // //כמה להביא כל פעם
    // protected $perPage = 5;

    // // לכבות את השדות תאריך
    // public $timestamps = false;

    // // שינוי שדות התאריכים
    // public const CREATED_AT = 'created';
    // public const UPDATED_AT = 'updated';

    // // שדות תאריכים נוספים
    // protected $dates = [''];

    // // פורמט השמירה של התאריך 
    // protected $dateFormat = '';
}
