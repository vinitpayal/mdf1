<?php
class ModelToolImage extends Model {
	public function resize($filename, $width, $height) {
        $s3Client = getS3Client();
        $s3Config = getS3Configs();

        if (!$s3Client->doesObjectExist($s3Config['bucket-name'], RELATIVE_IMG_DIR.$filename)) {
            return;
        }
        $extension = pathinfo($filename, PATHINFO_EXTENSION);

        $image_old = $filename;
        $image_new = 'cache/' . utf8_substr($filename, 0, utf8_strrpos($filename, '.')) . '-' . (int)$width . 'x' . (int)$height . '.' . $extension;

        //@todo Handle image modification time for cache image if image is changed then update it's cache also
        //|| (filectime(DIR_IMAGE . $image_old) > filectime(DIR_IMAGE . $image_new))

        if (!$s3Client->doesObjectExist($s3Config['bucket-name'], RELATIVE_IMG_DIR.$image_new)) {
            list($width_orig, $height_orig, $image_type) = getimagesize(DIR_IMAGE . $image_old);
            if (!in_array($image_type, array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF))) {
                return  DIR_IMAGE.$image_old;
            }

            if ($width_orig != $width || $height_orig != $height) {
                $image = new Image(RELATIVE_IMG_DIR.$image_old);
                $image->resize($width, $height);
                $image->save(RELATIVE_IMG_DIR . $image_new);
            } else {
                $image = new Image(RELATIVE_IMG_DIR . $image_old);
                $image->save(RELATIVE_IMG_DIR . $image_new);
            }
        }

        $image_new = str_replace(' ', '%20', $image_new);  // fix bug when attach image on email (gmail.com). it is automatic changing space " " to +

        return DIR_IMAGE . $image_new;
	}
}
