const usuarios = document.getElementById("usuarios");

const data = {
  labels: ["Julio", "Agosto", "Septiembre", "Noviembre", "Diciembre"],
  datasets: [
    {
      label: "Administradores",
      data: [50, 0, 0, 0, 0],
      fill: false,
      borderColor: "rgb(255, 87, 51)",
      backgroundColor: "rgb(255, 87, 51)",
      hoverOffset: 4,
    },
    {
      label: "Alumnos",
      data: [20, 0, 0, 0, 0],
      fill: false,
      borderColor: "rgb(51, 137, 255)",
      backgroundColor: "rgb(51, 137, 255)",
      hoverOffset: 4,
    },
    {
      label: "Profesores",
      data: [30, 0, 0, 0, 0],
      fill: false,
      borderColor: "rgb(160, 51, 255)",
      backgroundColor: "rgb(160, 51, 255)",
      hoverOffset: 4,
    },
    {
      label: "General",
      data: [50, 0, 0, 0, 0],
      fill: false,
      borderColor: "rgb(255, 49, 81)",
      backgroundColor: "rgb(255, 49, 81)",
      hoverOffset: 4,
    },
  ],
};

new Chart(usuarios, {
  type: "line",
  data: data,
  options: {
    responsive: true,
    maintainAspectRatio: true,
    animations: {
      onComplete: () => {
        delayed = true;
      },
      y: {
        easing: "easeInOutElastic",
        from: (ctx) => {
          if (ctx.type === "data") {
            if (ctx.mode === "default" && !ctx.dropped) {
              ctx.dropped = true;
              return 0;
            }
          }
        },
      },
      tension: {
        duration: 1000,
        easing: "linear",
        from: 1,
        to: 0,
        loop: true,
      },
    },
    plugins: {
      tooltip: {
        callbacks: {
          labelPointStyle: function (context) {
            return {
              pointStyle: "triangle",
              rotation: 0,
            };
          },
        },
      },
      legend: {
        labels: {
          font: {
            family: "Inter",
            weight: "bold",
            size: 11,
          },
        },
      },
    },
    scales: {
      y: {
        min: 0,
        max: 100,
        beginAtZero: true,
      },
    },
  },
});
