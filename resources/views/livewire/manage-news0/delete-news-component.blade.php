<div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
    <div class="modal-content p-3 p-md-5">
        <div class="modal-body">
            <h6 class="modal-title">حذف خبر</h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <p>توجه! آیا از حذف آیتم مورد نظر اطمینان دارید؟</p>

            <hr>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                انصراف
            </button>
            <button wire:click="delete()" type="button" class="btn btn-danger">
                خبر حذف شود
            </button>
        </div>
    </div>
</div>
