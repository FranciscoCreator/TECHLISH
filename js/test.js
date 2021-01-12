const contenedor = document.getElementById("test");
const botonRes = document.getElementById("boton");
const resultadoTest = document.getElementById("resultado");

const preguntas = [
  {
    pregunta: "1.  I live _______ Mexico.",
    respuestas: {
      a: "at",
      b: "on",
      c: "in",
    },
    respuestaCorrecta: "c",
  },
  {
    pregunta: "2. How old are you? ",
    respuestas: {
      a: "I have 27 years old.",
      b: "I’m 27.",
      c: "I are 27 years.",
    },
    respuestaCorrecta: "b",
  },
  {
    pregunta: "3. I have a brother. _____ name is Albert.",
    respuestas: {
      a: "He’s",
      b: "His",
      c: "He",
    },
    respuestaCorrecta: "b",
  },
  {
    pregunta: "4. They _____ from Mexico. ",
    respuestas: {
      a: "are",
      b: "is",
      c: "made",
    },
    respuestaCorrecta: "a",
  },
  {
    pregunta: "5. Saturday, Sunday, Monday, _____ ",
    respuestas: {
      a: "Thursday",
      b: "Tuesday",
      c: "Friday",
    },
    respuestaCorrecta: "b",
  },
  {
    pregunta: "6. _____ are you from?",
    respuestas: {
      a: "What",
      b: "When",
      c: "Where",
    },
    respuestaCorrecta: "c",
  },
  {
    pregunta: "7. What do you do? I’m _____ architect.",
    respuestas: {
      a: "a",
      b: "an",
      c: "the",
    },
    respuestaCorrecta: "b",
  },
  {
    pregunta: "8. What is John doing now?",
    respuestas: {
      a: "He’s reading a book.",
      b: "He reads a book. ",
      c: "He has reading a book.",
    },
    respuestaCorrecta: "a",
  },
  {
    pregunta: "9. _____ he work in New York City?",
    respuestas: {
      a: "Where",
      b: "Does",
      c: "Do",
    },
    respuestaCorrecta: "b",
  },
  {
    pregunta: "10. My wife and I _____ live in a flat. ",
    respuestas: {
      a: "don’t",
      b: "doesn’t",
      c: "haven’t",
    },
    respuestaCorrecta: "a",
  },
  {
    pregunta: "11. Mary _____ at six o’clock.",
    respuestas: {
      a: "gets up",
      b: "goes up",
      c: "get up",
    },
    respuestaCorrecta: "a",
  },
  {
    pregunta: "12.  _____ you like chocolate ice-cream? ",
    respuestas: {
      a: "Are",
      b: "Have",
      c: "Do",
    },
    respuestaCorrecta: "c",
  },
  {
    pregunta: "13. Do you _____ a blue pen? ",
    respuestas: {
      a: "get",
      b: "have",
      c: "got",
    },
    respuestaCorrecta: "b",
  },
  {
    pregunta: "14. We don’t have _____ tomatoes. ",
    respuestas: {
      a: "a",
      b: "no",
      c: "any",
    },
    respuestaCorrecta: "c",
  },
  {
    pregunta: "15. _____ a restaurant on the corner. ",
    respuestas: {
      a: "There",
      b: "There’s",
      c: "There’re",
    },
    respuestaCorrecta: "b",
  },
  {
    pregunta: "16. Those glasses are very _____ .",
    respuestas: {
      a: "expensive",
      b: "expensives",
      c: "cost",
    },
    respuestaCorrecta: "a",
  },
  {
    pregunta: "17. Los Angeles is a _____ city.",
    respuestas: {
      a: "noisy",
      b: "bit",
      c: "traffic",
    },
    respuestaCorrecta: "a",
  },
  {
    pregunta: "18. Luis and Patty _____ at my office yesterday.",
    respuestas: {
      a: "was",
      b: "are",
      c: "Kwereabul",
    },
    respuestaCorrecta: "c",
  },
  {
    pregunta: "19. Jason _____ got blue eyes.",
    respuestas: {
      a: "haven’t",
      b: "hasn’t",
      c: "Kadon’tbul",
    },
    respuestaCorrecta: "b",
  },
  {
    pregunta: "Do you want the green _____ ? ",
    respuestas: {
      a: "one",
      b: "it",
      c: "this",
    },
    respuestaCorrecta: "a",
  },
];

function mostrarTest() {
  const preguntasYrespuestas = [];

  preguntas.forEach((preguntaActual, numeroDePregunta) => {
    const respuestas = [];

    for (letraRespuesta in preguntaActual.respuestas) {
      respuestas.push(
        `<div class="row ">
              <div class="col-md-12 text-center bg-light">
              <input type="radio" name="${numeroDePregunta}" value="${letraRespuesta}" />
              ${letraRespuesta} ) ${preguntaActual.respuestas[letraRespuesta]}
              </div>
              
          </div>`
      );
    }

    preguntasYrespuestas.push(
      `<div class="row item-test">
      <div class="col-md-12">
      <div class="cuestion text-center">
      <label class="font-weight-bold " style="color:#ef7373;">
      ${preguntaActual.pregunta}
      </label>
      </div>
       <div class="respuestas container"> ${respuestas.join("")} </div>
      </div>
      </div>
      <br>
      `
    );
  });

  contenedor.innerHTML = preguntasYrespuestas.join("");
}

mostrarTest();

function mostrarResultado() {
  const respuestas = contenedor.querySelectorAll(".respuestas");
  let respuestasCorrectas = 0;

  preguntas.forEach((preguntaActual, numeroDePregunta) => {
    const todasLasRespuestas = respuestas[numeroDePregunta];
    const checkboxRespuestas = `input[name='${numeroDePregunta}']:checked`;
    const respuestaElegida = (
      todasLasRespuestas.querySelector(checkboxRespuestas) || {}
    ).value;

    if (respuestaElegida === preguntaActual.respuestaCorrecta) {
      respuestasCorrectas++;

      respuestas[numeroDePregunta].style.color = "blue";
    } else {
      respuestas[numeroDePregunta].style.color = "red";
    }
  });

  resultadoTest.innerHTML =
    "<p class='p-3'>Usted ha acertado " +
    respuestasCorrectas +
    " preguntas de un total de " +
    preguntas.length+'<p>';
}

botonRes.addEventListener("click", mostrarResultado);
