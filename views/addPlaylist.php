<!DOCTYPE html>
<html lang="en">
<head>
    <title>AddMusic</title>
</head>
<body>
<form action="/listArtist" method="post" enctype="multipart/form-data">
            <h2>Add Music</h2>
                <label for="song_name">Song Name</label>
                    <input type="text" name="song_name" id="song_name" autocomplete="username" placeholder="song">

            <label for="artist_name">Artist Name</label>
                    <select name="artist" id="artist">
                        <option value="">select</option>
                        <option value="">gv prakash</option>
                        <option value="">ar rahaman</option>
                        <?php foreach ($artist_name as $artist): ?>
                                <option value="<?php echo$artist->id?>"><?php echo$artist->artist_name?></option>
                            <?php endforeach;?>
                    </select>

                <label for="" <span>Upload file</span>
                    <input type="file" id="upload_file" name ="song"  multiple ="multiple"></label>
            <button type="submit">Add playlist</button>
</form>


</body>

</html>