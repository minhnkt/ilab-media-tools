var ilabMediaGoogleUploader=function(a,b,c){this.start=function(){var d=c.type;'application/x-photoshop'==d&&(d='image/psd');var e={action:'ilab_upload_prepare',filename:c.name,type:d};a.post(ajaxurl,e,function(d){if('ready'==d.status){b.updateStatusText('Uploading ...');var e=d.key,f=d.acl;a.ajax({url:d.url,method:'POST',headers:{"x-goog-resumable":'start',"Content-Type":c.type},success:function(d,f,g){var h=g.getResponseHeader('location');a.ajax({url:h,method:'PUT',processData:!1,crossDomain:!0,data:c,contentType:c.type,xhr:function(){var c=a.ajaxSettings.xhr();return c.upload.onprogress=function(a){b.updateProgress(a.loaded/a.total)},c},success:function(){a.post(ajaxurl,{action:'ilab_upload_import_cloud_file',key:e},function(a){b.itemUploaded('success'==a.status,a)})},error:function(){b.itemUploadError()}})},error:function(){b.itemUploadError()}})}else b.itemUploadError()})}};ilabMediaUploadItem.prototype.storageUploader=ilabMediaGoogleUploader;