<div class="pageContent">

    <table>
        <thead>
        <tr>
            <th>Dateiname</th>
            <th>Veröffentlicht am</th>
            <th>Beschreibung</th>
        </tr>
        </thead>

        <tbody>

    <?php

    $fileSystemIterator = new FilesystemIterator('.');

    foreach ($fileSystemIterator as $fileInfo){

        echo "<tr>
                <td>" . $fileInfo->getFilename() . "</td>
                <td>" . date("d.m.y",$fileInfo->getCTime()) . "</td>
                <td>" . $fileInfo->getFilename() . "</td>
              </tr>";

    }

    ?>

        </tbody>
    </table>
