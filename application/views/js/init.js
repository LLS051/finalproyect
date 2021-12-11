$(document).ready(function () {
    $("#listarUsuarios").DataTable({
      "responsive": true,
       "lengthChange": false, 
       "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    })
    
    $('#summernote').summernote()
  });