<div class="modal-page-header">
    <h2 class="">
        <svg width="24px" height="24px" class="template-manager-icon" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <g stroke-width="0"/>
            <g stroke-linecap="round" stroke-linejoin="round"/>
            <g>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3 3V9H21V3H3ZM19 5H5V7H19V5Z" fill="#000000"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3 11V21H11V11H3ZM9 13H5V19H9V13Z" fill="#000000"/>
                <path d="M21 11H13V13H21V11Z" fill="#0DB388"/>
                <path d="M13 15H21V17H13V15Z" fill="#0DB388"/>
                <path d="M21 19H13V21H21V19Z" fill="#0DB388"/>
            </g>
        </svg><?= t('Template Manager') ?>
    </h2>
</div>
<div class="modal-contents">
    <h3 class=""><?= t('Create Comment Template') ?></h3>
    <form id="TemplateForm" class="template-form" method="post" action="<?= $this->url->href('CommentTemplateController', 'save', array('project_id' => $project['id'], 'plugin' => 'TemplateManager')) ?>" autocomplete="on">
        <?= $this->form->csrf() ?>

        <span class="template-form-section">
            <?= $this->form->label(t('Title'), 'title') ?>
            <?= $this->form->text('title', $values, $errors, array('autofocus', 'required', 'tabindex="1"', 'placeholder="'. t('My Template Title') .'"')) ?>
        </span>

        <span class="template-form-section">
            <?= $this->form->label(t('Topic'), 'topic') ?>
            <?= $this->form->text('topic', $values, array(), array('tabindex="2"', 'placeholder="'. t('e.g. General') .'"')) ?>
            <p class="form-help"><?= t('Topics can help group and label similar templates') ?></p>
        </span>

        <span class="template-form-section">
            <?= $this->form->label(t('Note'), 'note') ?>
            <?= $this->form->text('note', $values, array(), array('tabindex="3"', 'placeholder="'. t('My note for this template') .'"')) ?>
            <p class="form-help"><?= t('Add a short note to describe what this template is about') ?></p>
        </span>

        <?= $this->form->label(t('Template Content'), 'description') ?>
        <?= $this->form->textEditor('description', $values, $errors, array('tabindex' => 4)) ?>

        <div class="form-actions">
            <button type="submit" class="btn create-btn" title="<?= t('Saves any changes made on this page') ?>">
                <svg width="20px" height="20px" class="comment-templates-icon" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                    <g stroke-width="0"/>
                    <g stroke-linecap="round" stroke-linejoin="round"/>
                    <g>
                        <g>
                            <path d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z"/>
                            <path fill="#808080" d="M310.875,254.734c-40.438,0-73.172,22.078-73.172,49.234c0,12.094,10.172,25.875,20.922,34.469L248.188,368l31.703-19.469 c9.453,2.969,19.891,4.656,30.984,4.656c40.391,0,73.125-22,73.125-49.219C384,276.812,351.266,254.734,310.875,254.734z"/>
                            <path fill="#055D20" d="M256,144c-70.688,0-128,40.234-128,89.891c0,22.062,17.781,47.234,36.562,62.922l-18.266,53.969l55.547-35.562 c7.25,2.375,14.938,4.25,22.844,5.656c-3.234-6.344-5.25-12.938-5.25-19.125c0-35.484,40.938-64.219,91.438-64.219 c27.062,0,51.188,8.422,67.938,21.578c3.312-8,5.188-16.469,5.188-25.219C384,184.234,326.688,144,256,144z"/>
                        </g>
                    </g>
                </svg> <?= t('Create') ?>
            </button>
            <a class="btn cancel-btn js-modal-close" href="#"><?= t('Cancel') ?></a>
            <button type="reset" class="btn reset-btn" title="<?= t('Clear any changes made on this page') ?>">
                <?= t('Reset') ?>
            </button>
        </div>
    </form>
</div>
