<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Video $model */

$this->title = 'Create Video';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="upload-icon mb-2">
            <i class="fa-solid fa-file-arrow-up"></i>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <p class="mb-0">Drag and drop a file you want to upload</p>
            <p class="text-muted">Your video will be private until you publish it</p>
            <?php ActiveForm::begin() ?>
            <button class="btn btn-primary btn-file align-self-center">
                <input type="file" id="videoFile" name="video" style="display:none;">
                <label for="videoFile">Select File</label>
            </button>
            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>