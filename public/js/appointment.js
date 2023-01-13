// Funcion que ejecuta el full calndear
document.addEventListener('DOMContentLoaded', function() {
// Esta variable recibe el id de nustros index.balde  
    var calendarEl = document.getElementById('appointment');
// Varible que ejecuta nustros full caldendar y sus caracteristicas en js 
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
   /// Le damos el idioma   
        locale: "es",

        headerToolbar: {
        /// Boton de anterior y siguiente
            left: 'prev,next today',
        /// Titulo centrado 
            center: 'title',
        /// Ver diferentes vistas
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
    },

    dateClick: function(info) {
        $("#exampleModal").modal("show");
    //     alert('clicked ' + info.dateStr);
    //   },
    // select: function(info) {
    //     alert('selected ' + info.startStr + ' to ' + info.endStr);
    }

  });
  calendar.render();
});

