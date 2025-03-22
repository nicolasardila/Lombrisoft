const contenedorInfo = {
    "cont-1": {
      titulo: "Contenedor 1",
      detalles: [
        "🍂 Alimento: Residuos de cocina",
        "🪱 Lombrices: 1,000 lombrices",
        "📅 Última Alimentación: Hace 2 días",
        "🗓️ Estado del Compost: En fermentación",
        "🔍 Observaciones: Temperatura estable."
      ]
    },
    "cont-2": {
      titulo: "Contenedor 2",
      detalles: [
        "🍂 Alimento: Hojas secas",
        "🪱 Lombrices: 800 lombrices",
        "📅 Última Alimentación: Hace 4 días",
        "🗓️ Estado del Compost: Maduración intermedia",
        "🔍 Observaciones: Agregar agua en el próximo ciclo."
      ]
    },
    "cont-3": {
      titulo: "Contenedor 3",
      detalles: [
        "🍂 Alimento: Hojas secas",
        "🪱 Lombrices: 800 lombrices",
        "📅 Última Alimentación: Hace 4 días",
        "🗓️ Estado del Compost: Maduración intermedia",
        "🔍 Observaciones: Agregar agua en el próximo ciclo."
      ]
    },
    "cont-4": {
      titulo: "Contenedor 4",
      detalles: [
        "🍂 Alimento: Hojas secas",
        "🪱 Lombrices: 800 lombrices",
        "📅 Última Alimentación: Hace 4 días",
        "🗓️ Estado del Compost: Maduración intermedia",
        "🔍 Observaciones: Agregar agua en el próximo ciclo."
      ]
    },
    "cont-5": {
      titulo: "Contenedor 5",
      detalles: [
        "🍂 Alimento: Hojas secas",
        "🪱 Lombrices: 800 lombrices",
        "📅 Última Alimentación: Hace 4 días",
        "🗓️ Estado del Compost: Maduración intermedia",
        "🔍 Observaciones: Agregar agua en el próximo ciclo."
      ]
    },
    "cont-6": {
      titulo: "Contenedor 6",
      detalles: [
        "🍂 Alimento: Hojas secas",
        "🪱 Lombrices: 800 lombrices",
        "📅 Última Alimentación: Hace 4 días",
        "🗓️ Estado del Compost: Maduración intermedia",
        "🔍 Observaciones: Agregar agua en el próximo ciclo."
      ]
    },
    // Información para los demás contenedores...
  };
  
  // Seleccionar elementos
  const modal = document.getElementById("modal");
  const modalTitle = document.getElementById("modal-title");
  const modalDetails = document.getElementById("modal-details");
  const closeBtn = document.querySelector(".close");
  const contenedores = document.querySelectorAll(".contenedor");
  
  // Función para abrir el modal
  contenedores.forEach((contenedor) => {
    contenedor.addEventListener("click", () => {
      const id = contenedor.id;
      const data = contenedorInfo[id];
  
      modalTitle.textContent = data.titulo;
      modalDetails.innerHTML = data.detalles.map(item => `<li>${item}</li>`).join("");
      modal.style.display = "block";
    });
  });
  
  // Función para cerrar el modal
  closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
  });
  
  window.addEventListener("click", (e) => {
    if (e.target == modal) {
      modal.style.display = "none";
    }
  });
  document.addEventListener('DOMContentLoaded', () => {
    const addBedBtn = document.querySelector('.add-bed-btn');
    const addBedModal = document.getElementById('add-bed-modal');
    const closeButtons = document.querySelectorAll('.close');
    const modal = document.getElementById('modal');
  
    addBedBtn.addEventListener('click', () => {
      addBedModal.style.display = 'block';
    });
  
    closeButtons.forEach(button => {
      button.addEventListener('click', () => {
        addBedModal.style.display = 'none';
        modal.style.display = 'none';
      });
    });
  
    window.addEventListener('click', (event) => {
      if (event.target === addBedModal) {
        addBedModal.style.display = 'none';
      }
      if (event.target === modal) {
        modal.style.display = 'none';
      }
    });
  
    // Aquí puedes agregar los manejadores de eventos para los botones de actualizar, eliminar y cambiar estado
  });
  document.addEventListener('DOMContentLoaded', () => {
    const addBedBtn = document.querySelector('.add-bed-btn');
    const addBedModal = document.getElementById('add-bed-modal');
    const updateBedModal = document.getElementById('update-bed-modal');
    const closeButtons = document.querySelectorAll('.close');
    const modal = document.getElementById('modal');
  
    addBedBtn.addEventListener('click', () => {
      addBedModal.style.display = 'block';
    });
  
    closeButtons.forEach(button => {
      button.addEventListener('click', () => {
        addBedModal.style.display = 'none';
        updateBedModal.style.display = 'none';
        modal.style.display = 'none';
      });
    });
  
    window.addEventListener('click', (event) => {
      if (event.target === addBedModal) {
        addBedModal.style.display = 'none';
      }
      if (event.target === updateBedModal) {
        updateBedModal.style.display = 'none';
      }
      if (event.target === modal) {
        modal.style.display = 'none';
      }
    });
  
    // Aquí puedes agregar los manejadores de eventos para los botones de actualizar, eliminar y cambiar estado
    const updateButtons = document.querySelectorAll('.update-btn');
    updateButtons.forEach(button => {
      button.addEventListener('click', () => {
        updateBedModal.style.display = 'block';
      });
    });
  });
  document.addEventListener('DOMContentLoaded', () => {
    const addToolBtn = document.querySelector('.add-tool-btn');
    const addToolModal = document.getElementById('add-tool-modal');
    const updateToolModal = document.getElementById('update-tool-modal');
    const closeButtons = document.querySelectorAll('.close');
    const toolModal = document.getElementById('tool-modal');
  
    addToolBtn.addEventListener('click', () => {
      addToolModal.style.display = 'block';
    });
  
    closeButtons.forEach(button => {
      button.addEventListener('click', () => {
        addToolModal.style.display = 'none';
        updateToolModal.style.display = 'none';
        toolModal.style.display = 'none';
      });
    });
  
    window.addEventListener('click', (event) => {
      if (event.target === addToolModal) {
        addToolModal.style.display = 'none';
      }
      if (event.target === updateToolModal) {
        updateToolModal.style.display = 'none';
      }
      if (event.target === toolModal) {
        toolModal.style.display = 'none';
      }
    });
  
    // Aquí puedes agregar los manejadores de eventos para los botones de actualizar, eliminar y cambiar estado de herramientas
    const updateToolButtons = document.querySelectorAll('.update-tool-btn');
    updateToolButtons.forEach(button => {
      button.addEventListener('click', () => {
        updateToolModal.style.display = 'block';
      });
    });
  });
  document.addEventListener('DOMContentLoaded', () => {
    const addToolBtn = document.querySelector('.add-tool-btn');
    const addToolModal = document.getElementById('add-tool-modal');
    const updateToolModal = document.getElementById('update-tool-modal');
    const closeButtons = document.querySelectorAll('.close');
    const toolModal = document.getElementById('tool-modal');
  
    addToolBtn.addEventListener('click', () => {
      addToolModal.style.display = 'block';
    });
  
    closeButtons.forEach(button => {
      button.addEventListener('click', () => {
        addToolModal.style.display = 'none';
        updateToolModal.style.display = 'none';
        toolModal.style.display = 'none';
      });
    });
  
    window.addEventListener('click', (event) => {
      if (event.target === addToolModal) {
        addToolModal.style.display = 'none';
      }
      if (event.target === updateToolModal) {
        updateToolModal.style.display = 'none';
      }
      if (event.target === toolModal) {
        toolModal.style.display = 'none';
      }
    });
  
    // Aquí puedes agregar los manejadores de eventos para los botones de actualizar, eliminar y cambiar estado de herramientas
    const updateToolButtons = document.querySelectorAll('.update-tool-btn');
    updateToolButtons.forEach(button => {
      button.addEventListener('click', () => {
        updateToolModal.style.display = 'block';
      });
    });
  });
  document.addEventListener('DOMContentLoaded', () => {
    const addToolBtn = document.querySelector('.add-tool-btn');
    const addToolModal = document.getElementById('add-tool-modal');
    const updateToolModal = document.getElementById('update-tool-modal');
    const closeButtons = document.querySelectorAll('.close');
    const toolModal = document.getElementById('tool-modal');
    const herramientas = document.querySelectorAll('.herramienta');
  
    addToolBtn.addEventListener('click', () => {
      addToolModal.style.display = 'block';
    });
  
    closeButtons.forEach(button => {
      button.addEventListener('click', () => {
        addToolModal.style.display = 'none';
        updateToolModal.style.display = 'none';
        toolModal.style.display = 'none';
      });
    });
  
    window.addEventListener('click', (event) => {
      if (event.target === addToolModal) {
        addToolModal.style.display = 'none';
      }
      if (event.target === updateToolModal) {
        updateToolModal.style.display = 'none';
      }
      if (event.target === toolModal) {
        toolModal.style.display = 'none';
      }
    });
  
    // Función para abrir el modal de información de la herramienta
    herramientas.forEach((herramienta) => {
      herramienta.addEventListener('click', () => {
        const id = herramienta.id;
        const data = herramientaInfo[id];
  
        const toolModalTitle = document.getElementById('tool-modal-title');
        const toolModalDetails = document.getElementById('tool-modal-details');
  
        toolModalTitle.textContent = data.titulo;
        toolModalDetails.innerHTML = data.detalles.map(item => `<li>${item}</li>`).join("");
        toolModal.style.display = 'block';
      });
    });
  
    // Aquí puedes agregar los manejadores de eventos para los botones de actualizar, eliminar y cambiar estado de herramientas
    const updateToolButtons = document.querySelectorAll('.update-tool-btn');
    updateToolButtons.forEach(button => {
      button.addEventListener('click', () => {
        updateToolModal.style.display = 'block';
      });
    });
  });
  
  // Información de cada herramienta
  const herramientaInfo = {
    "tool-1": {
      titulo: "Herramienta 1",
      detalles: [
        "Estado: Bueno",
        "Último Mantenimiento: 2024-10-20",
        "Ubicación: Almacén",
        "Observaciones: Herramienta en buen estado."
      ]
    },
    "tool-2": {
      titulo: "Herramienta 2",
      detalles: [
        "Estado: Regular",
        "Último Mantenimiento: 2024-09-15",
        "Ubicación: Taller",
        "Observaciones: Necesita revisión."
      ]
    },
    "tool-3": {
      titulo: "Herramienta 3",
      detalles: [
        "Estado: Excelente",
        "Último Mantenimiento: 2024-11-01",
        "Ubicación: Almacén",
        "Observaciones: Lista para usar."
      ]
    },
    "tool-4": {
      titulo: "Herramienta 4",
      detalles: [
        "Estado: Bueno",
        "Último Mantenimiento: 2024-10-10",
        "Ubicación: Taller",
        "Observaciones: Funciona correctamente."
      ]
    },
    "tool-5": {
      titulo: "Herramienta 5",
      detalles: [
        "Estado: Regular",
        "Último Mantenimiento: 2024-08-20",
        "Ubicación: Almacén",
        "Observaciones: Requiere mantenimiento."
      ]
    },
    "tool-6": {
      titulo: "Herramienta 6",
      detalles: [
        "Estado: Excelente",
        "Último Mantenimiento: 2024-11-05",
        "Ubicación: Taller",
        "Observaciones: En perfecto estado."
      ]
    }
  };