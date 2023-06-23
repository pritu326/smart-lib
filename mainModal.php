<!-- Modal -->
<div class="modal fade" id="mainModal" tabindex="-1" aria-labelledby="mainModalLabel"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mainModalLabel">Signup to Smart Lib</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <h6 class="modal-main-content" style="text-align: center;" id="mainModalLabel">How Will You Use SMART-LIB?</h6>
            <div class="container" style="margin:15px 95px;">
            <div id="btn"></div>
            <button class="btn btn-success mx-2 px-4" data-toggle="modal" id="user" data-target="#signupModal">As User</button>
            <button class="btn btn-success mx-2"  data-toggle="modal" id="librarian" data-target="#registerModal" >As Librarian</button>
            </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<script>
    const signupModal = document.getElementById('signupModal')
signupModal.addEventListener('show.bs.modal', event => {
  // Button that triggered the modal
  const button = event.relatedTarget
  // Extract info from data-bs-* attributes
  const recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  const modalTitle = signupModal.querySelector('.modal-title')
  const modalBodyInput = signupModal.querySelector('.modal-body input')

  modalTitle.textContent = `New message to ${recipient}`
  modalBodyInput.value = recipient
})
</script>

