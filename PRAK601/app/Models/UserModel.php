<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public function getUser()
    {
        return [
    'nama' => 'Regina Silva Maharatini ✨',
    'nim' => '2310817220011',
    'prodi' => '💻 Teknologi Informasi',
    'hobi' => '🎧 Mendengarkan musik',
    'skill' => '🎨 Desain digital (dikit), ✂️ DIY craft, 🎤 Nyanyi',
    'foto' => 'sisil.jpg',
    'panggilan' => 'SISIL',
    'laguFavorit' => [
        '💗 youre here thats the thing — Beabadoobee',
        '🪻 sugarplum elegy — NIKI',
        '🌟 fade into you — Mazzy Star'  
            ]
        ];
        
    }
}
