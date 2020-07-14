<div class="modal fade{{ (!empty($modal_class) ? ' '.$modal_class : '') }}" id="{{ $modal_id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $modal_id }}Label" aria-hidden="true">
    <div class="modal-dialog{{ (!empty($modal_size) ? ' '.$modal_size : '') }}" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $modal_id }}Label">{{ $modal_title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @yield('modal_content_'.$modal_id)
            </div>
            <div class="modal-footer">
                @section('modal_footer_'.$modal_id)
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                @show
            </div>
        </div>
    </div>
</div>
