<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;

AppAsset::register($this);
$this->beginContent('@backend/views/layouts/base.php');
?>


<main role="main" class="d-flex flex-shrink-0 h-100">
    <?php echo $this->render('_sidebar'); ?>
    <div class="content-wrapper p-3 w-100">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>



<?php $this->endContent(); ?>