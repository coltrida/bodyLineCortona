// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#corsiDataTable').DataTable(
      {
          ajax: {
              url: '/api/courses',
              dataSrc: ''
          },
          columns: [
              { data: 'nome' },
              { data: 'descrizione' },
              { data: 'trainer_id' },
              {
                  data: 'id',
                  render: function (data)
                  {
                      let link = '/api/courses/elimina/'+data;
                      let classeBtn = "btn btn-danger";

                      return "<a href="+ link + " class="+ classeBtn +" >" +
                          '<i title="elimina" class="fas fa-trash"></i></a> '
                  }
               },
          ]
      }
  );
});
