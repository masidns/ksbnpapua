<?php

namespace App\Models;

use CodeIgniter\Model;

class NewseventModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'newsevents';
    protected $primaryKey       = 'newsevents_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'judul',
        'slug',
        'gambar',
        'kategori',
        'keterangan',
        'users_id',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getNews($slug = false)
    {
        # code...
        if ($slug == false) {
            return $this->db->table('newsevents')
                ->orderBy('newsevents.newsevents_id', 'DESC')
                ->join('users', 'users.users_id = newsevents.users_id')
                ->get()->getResult();
        }
        return $this->db->table('newsevents')
            ->join('users', 'newsevents.users_id = users.users_id')
            ->getWhere(['slug' => $slug])->getRow();
    }
}
