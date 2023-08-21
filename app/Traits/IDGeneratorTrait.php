<?php

namespace App\Traits;

trait IDGeneratorTrait
{
    public static function boot() {
        parent::boot();
        self::created(function($mModel) {
            $type = get_class($mModel);

            $m =  $type::where('code', '!=', null)->orderBy('id', 'desc')->first();
            if($m != null) {
                $knId = code_generator($m->code);
                if($m->code !== $knId) {
                    $mModel->code = $knId;
                    if($mModel::class == User::class) $mModel->username = $knId;
                    $mModel->save();
                }
            }else {
                $knId = 'AA-00-AA-00';
                $mModel->code = $knId;
                if($mModel::class == User::class) $mModel->username = $knId;
                $mModel->save();
            }
        });
    }

}
