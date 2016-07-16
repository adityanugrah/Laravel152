<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	
    /**
	* Isi dengan nama tabelnya ,
	* HANYA JIKA nama tabelnya bukan bentuk pural dari model ini
	* jika nama tabel sudah bentuk plural dari tabelnya tidak perlu ditulis
	* kecuali contoh : tbl_category --> baru ditulis
	*/
	
	protected $table = 'categories';
	
	/**
	* Isi dengan nama kolom PK-nya
	* HANYA JIKA nama kolom PK-nya bukan "id"
	*/
	protected $primaryKey = 'CategoryID';
	
	/**
	* Isi dengan nama kolom yang nanti akan diisi oleh end-user.
	* Kolom-kolom yang diisi otomatis oleh DB ataupun oleh Laravel
	TIDAK perlu disebutkan .
	*/
	protected $fillable = [
		'CategoryName',
		'Description',
		'Picture'
	];
	
	protected function products () {
		return $this->hasMany(Product::class, 'CategoryID');
	}
}