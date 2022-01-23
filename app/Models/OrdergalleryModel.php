<?php

namespace App\Models;

use CodeIgniter\Model;

class OrdergalleryModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ordergallery';
    protected $primaryKey       = 'idordergallery';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'users_id',
        'judulgallery',
        'gstatus',
        'sluggallery',
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

    public function getorder($sluggallery = false)
    {
        # code...
        if ($sluggallery == false) {
            return $this->db->query(
                "SELECT
            `ordergallery`.*,
            `gallery`.`gallerygambar`,
            `users`.`users_id` AS `users_id1`
          FROM
            `ordergallery`
            LEFT JOIN `users` ON `users`.`users_id` = `ordergallery`.`users_id`
            LEFT JOIN `gallery` ON `gallery`.`idordergallery` =
          `ordergallery`.`idordergallery`"
            )
                // ->orderBy('idordergallery', 'DESC')
                // ->join('users', 'users.users_id = ordergallery.users_id')
                // ->join('gallery', 'gallery.id = ordergallery.idordergallery')
                ->getResult();
        }
        return $this->db->table('ordergallery')
            ->join('users', 'users.users_id = ordergallery.users_id')
            // ->join('gallery', 'gallery.id = ordergallery.idordergallery')
            ->getWhere(['sluggallery' => $sluggallery])->getRowObject();

        // if ($sluggallery == false) {
        //     return $this->db->table('ordergallery')
        //         ->orderBy('idordergallery', 'DESC')
        //         ->join('users', 'users.users_id = ordergallery.users_id')
        //         // ->join('gallery', 'gallery.id = ordergallery.idordergallery')
        //         ->get()->getResult();
        // }
        // return $this->db->table('ordergallery')
        //     ->join('users', 'users.users_id = ordergallery.users_id')
        //     // ->join('gallery', 'gallery.id = ordergallery.idordergallery')
        //     ->getWhere(['sluggallery' => $sluggallery])->getRowObject();
    }
}
