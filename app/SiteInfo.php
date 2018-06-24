<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteInfo extends Model
{
    protected $fillable = [
        'site_name', 'logo', 'fivicon', 'key_words', 'description', 'author', 'term_docx', 'policy', 'website_used', 'payment_methods', 'footer_about', 'fb', 'tw', 'instagram', 'google'
    ];
}
