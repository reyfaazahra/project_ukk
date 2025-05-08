<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $fillable =['id','judul','konten','id_kategori','foto'];
    public $timestamp = true;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public function deleteimage()
    {
        if($this->foto && file_exists(public_path('storage/artikel' . $this->foto))){
            return unlink(public_path('storage/artikel' . $this->foto));
        }
    }
}
