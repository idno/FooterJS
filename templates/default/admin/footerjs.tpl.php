<div class="row">

    <div class="span10 offset1">
        <h1>Custom JavaScript & HTML</h1>
        <?=$this->draw('admin/menu')?>
        <div class="explanation">
            <p>
            This editor lets you easily customize your website using a combination of JavaScript and HTML in the header and footer. You can use this space to add code to your site pages for things like analytics, page optimization, and customer tracking.                    </p>
        </div>
    </div>

</div>
<form action="/admin/footerjs/" class="form-horizontal" method="post">
	<div class="row">
		<div class="span10 offset1">
		<h2>Code editor</h2>
		</div>
	</div>
            <div class="row">
                <div class="span10 offset1">
	                <p class="controls"><strong>Header code</strong></p>
                    <textarea name="headerjs" class="span10" rows="10"><?=htmlspecialchars(\Idno\Core\site()->config()->headerjs)?></textarea>
                </div>
            </div>
            <div class="row">
               <!-- <label class="control-label" for="footerjs"><strong>Footer Code</strong></label>-->
                <div class="span10 offset1">
	               <p class="controls"><strong>Footer code</strong></p> 
                    <textarea name="footerjs" class="span10" rows="10"><?=htmlspecialchars(\Idno\Core\site()->config()->footerjs)?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="span10 offset1">
	             
                    <button type="submit" class="btn btn-primary code">Save code</button>
	                
                </div>
            </div>
            <?= \Idno\Core\site()->actions()->signForm('/admin/footerjs/')?>
        </form>
