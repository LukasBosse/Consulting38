<div class="pageContent">

    <div class="section">
        <div class="form-group">
            <label for="comment">Impressum:</label>
            <textarea class="form-control" rows="20" id="comment" readonly>
                <?php
                    $file = file_get_contents($this->path . DIRECTORY_SEPARATOR . 'impressum.txt');
                    echo $file;
                ?>
            </textarea>
        </div>
    </div>