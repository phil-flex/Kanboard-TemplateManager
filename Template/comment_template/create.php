<div class="page-header">
    <h2><?= t('Create Comment Template') ?></h2>
</div>
<form method="post" action="<?= $this->url->href('CommentTemplateController', 'save', array('project_id' => $project['id'], 'plugin' => 'TemplateManager')) ?>" autocomplete="on">
    <?= $this->form->csrf() ?>

    <?= $this->form->label(t('Title'), 'title') ?>
    <?= $this->form->text('title', $values, $errors, array('autofocus', 'required', 'tabindex="1"')) ?>

    <?= $this->form->label(t('Topic'), 'topic') ?>
    <?= $this->form->text('topic', $values, array(), array('tabindex="2"')) ?>
    <p class="form-help"><?= t('Topics can help group and label similar templates.') ?></p>

    <?= $this->form->label(t('Template Content'), 'description') ?>
    <?= $this->form->textEditor('description', $values, $errors, array('tabindex' => 3)) ?>

    <?= $this->modal->submitButtons() ?>
</form>
