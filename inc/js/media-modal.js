/*global window,jQuery,wp */
var MediaModal=function(t){"use strict";this.settings={calling_selector:!1,cb:function(t){}};var e=this,i=wp.media.frames.file_frame;return this.attachEvents=function(){jQuery(this.settings.calling_selector).on("click",this.openFrame)},this.openFrame=function(t){t.preventDefault(),i=wp.media.frames.file_frame=wp.media({title:jQuery(this).data("uploader_title"),button:{text:jQuery(this).data("uploader_button_text")},library:{type:"image"}}),i.on("toolbar:create:select",function(){i.state().set("filterable","uploaded")}),i.on("select",function(){var t=i.state().get("selection").first().toJSON();e.settings.cb(t)}),i.on("open activate",function(){var t=jQuery(e.settings.calling_selector);if(t.data("thumbnail_id")){var a=wp.media.model.Attachment,n=i.state().get("selection");n.add(a.get(t.data("thumbnail_id")))}}),i.open()},this.init=function(){this.settings=jQuery.extend(this.settings,t),this.attachEvents()},this.init(),this};