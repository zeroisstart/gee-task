<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel modules\member\models\ProjectMemberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '成员';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-member-index">

    <p>
        <?= Html::a('添加 Project Member', ['create'], ['class' => 'btn btn-success','data-toggle'=>'modal','data-target'=>'#modal-dailog']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'attribute'=>'user_id',
                'value'=>function($model){
                    return $model->username;
                }
            ],
            'position',

            [
                'class' => '\app\grid\ActionColumn',
                'buttonsOptions'=>[
                    'update'=>[
                        'data-toggle'=>'modal',
                        'data-target'=>'#modal-dailog',
                    ],
                    'view'=>[
                        'data-toggle'=>'modal',
                        'data-target'=>'#modal-dailog',
                    ],
                ]
        	]
       ]
    ]); ?>
</div>
