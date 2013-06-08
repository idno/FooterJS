<div class="row">

    <div class="span10 offset1">
        <h1>Footer Javascript</h1>
        <?=$this->draw('admin/menu')?>
    </div>

</div>
<div class="row">
    <div class="span10 offset1">
        <form action="/admin/footerjs/" class="form-horizontal" method="post">
            <div class="control-group">
                <div class="controls">
                    <p>
                        To include analytics code, for example Google Analytics or Piwik, in your site pages,
                        paste it below:
                    </p>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="footerjs">Code</label>
                <div class="controls">
                    <textarea name="footerjs" class="span6" rows="10"><?=htmlspecialchars(\Idno\Core\site()->config()->footerjs)?></textarea>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn-primary">Save</button>
                </div>
            </div>
            <?= \Idno\Core\site()->actions()->signForm('/admin/footerjs/')?>
        </form>
    </div>
</div>