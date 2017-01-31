update two table
UPDATE
                     tblapplicant,
                     tbltestimonial
                 SET
                     tblapplicant.ImagePath='".$name."',
                     tbltestimonial.pic = '".$name."'
                 WHERE
                     tblapplicant.appid=tbltestimonial.appid"