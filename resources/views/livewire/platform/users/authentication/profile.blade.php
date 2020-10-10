<form wire:submit.prevent="submit">
    <div class="form-desc">
        Please enter your use profile information before we can redirect you to your dashboard
    </div>
    <div class="form-group">
        <label for=""> Avatar</label>
        <input type="file"
               id="filepond"
               class="filepond"
               name="filepond"
               accept="image/png, image/jpeg, image/gif"/>
    </div>
    <div class="form-group">
        <label for=""> Identity Number</label><input wire:model="identity" class="form-control" placeholder="Your Identity Number" type="text">
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label for=""> Address</label><input wire:model="address" class="form-control" placeholder="Your Home Address" type="text">
            </div>
        </div>
    </div>
    <div class="form-buttons-w">
        <button class="btn btn-primary" type="submit"> Submit</button>
    </div>
</form>

@section('javascript')
    <script >


        document.addEventListener('livewire:load', function () {
            FilePond.registerPlugin(
                FilePondPluginFileValidateType,
                FilePondPluginImageExifOrientation,
                FilePondPluginImagePreview,
                FilePondPluginImageCrop,
                FilePondPluginImageResize,
                FilePondPluginImageTransform,
                FilePondPluginImageEdit
            );

            // Select the file input and use
            // create() to turn it into a pond
            FilePond.create(

            document.querySelector('input[type="file"]'),
                {
                    labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
                    imagePreviewHeight: 170,
                    imageCropAspectRatio: '1:1',
                    imageResizeTargetWidth: 200,
                    imageResizeTargetHeight: 200,
                    stylePanelLayout: 'compact circle',
                    styleLoadIndicatorPosition: 'center bottom',
                    styleProgressIndicatorPosition: 'right bottom',
                    styleButtonRemoveItemPosition: 'left bottom',
                    styleButtonProcessItemPosition: 'right bottom',

                    // Use Doka.js as image editor
                    imageEditEditor: Doka.create({
                        utils: ['crop', 'filter', 'color']
                    })
                }
            );
        })
    </script>
@stop
