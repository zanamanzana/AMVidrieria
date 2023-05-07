const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,25}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,25}$/, // Letras y espacios, pueden llevar acentos.
	telefono: /^\d{8,9}$/, // 7 a 14 numeros.
    ancho: /^\d{3,5}$/, // 7 a 14 numeros.
    largo: /^\d{3,5}$/ // 7 a 14 numeros.
}

const campos = {
	nombre: false,
	apellido: false,
	telefono: false,
	ancho: false,
	largo: false,
	color: false,
	material: false,
	ventana: false
}

const validarFormulario = (e) => {
	switch (e.target.name){
		case"nombre":
			if(expresiones.nombre.test(e.target.value)){
				document.getElementById('grupo__nombre').classList.remove('formulario__grupo-incorrecto');
				document.getElementById('grupo__nombre').classList.add('formulario__grupo-correcto');
				document.querySelector('#grupo__nombre i').classList.remove('fa-times-circle');
				document.querySelector('#grupo__nombre i').classList.add('fa-check-circle');
				document.querySelector('#grupo__nombre .formulario__input-error').classList.remove('formulario__input-error-activo');
				campos['nombre'] = true;
			}else{
				document.getElementById('grupo__nombre').classList.remove('formulario__grupo-correcto');
				document.getElementById('grupo__nombre').classList.add('formulario__grupo-incorrecto');
				document.querySelector('#grupo__nombre i').classList.remove('fa-check-circle');
				document.querySelector('#grupo__nombre i').classList.add('fa-times-circle');
				document.querySelector('#grupo__nombre .formulario__input-error').classList.add('formulario__input-error-activo');
				campos['nombre'] = false;
			}
		break;

		case "apellido":
			if(expresiones.apellido.test(e.target.value)){
				document.getElementById('grupo__apellido').classList.remove('formulario__grupo-incorrecto');
				document.getElementById('grupo__apellido').classList.add('formulario__grupo-correcto');
				document.querySelector('#grupo__apellido i').classList.remove('fa-times-circle');
				document.querySelector('#grupo__apellido i').classList.add('fa-check-circle');
				document.querySelector('#grupo__apellido .formulario__input-error').classList.remove('formulario__input-error-activo');
				campos['apellido'] = true;
			}else{
				document.getElementById('grupo__apellido').classList.remove('formulario__grupo-correcto');
				document.getElementById('grupo__apellido').classList.add('formulario__grupo-incorrecto');
				document.querySelector('#grupo__apellido i').classList.remove('fa-check-circle');
				document.querySelector('#grupo__apellido i').classList.add('fa-times-circle');
				document.querySelector('#grupo__apellido .formulario__input-error').classList.add('formulario__input-error-activo');
				campos['apellido'] = false;
			}

		break;

		case "telefono":
			if(expresiones.telefono.test(e.target.value)){
				document.getElementById('grupo__telefono').classList.remove('formulario__grupo-incorrecto');
				document.getElementById('grupo__telefono').classList.add('formulario__grupo-correcto');
				document.querySelector('#grupo__telefono i').classList.remove('fa-times-circle');
				document.querySelector('#grupo__telefono i').classList.add('fa-check-circle');
				document.querySelector('#grupo__telefono .formulario__input-error').classList.remove('formulario__input-error-activo');
				campos['telefono'] = true;
			}else{
				document.getElementById('grupo__telefono').classList.remove('formulario__grupo-correcto');
				document.getElementById('grupo__telefono').classList.add('formulario__grupo-incorrecto');
				document.querySelector('#grupo__telefono i').classList.remove('fa-check-circle');
				document.querySelector('#grupo__telefono i').classList.add('fa-times-circle');
				document.querySelector('#grupo__telefono .formulario__input-error').classList.add('formulario__input-error-activo');
				campos['telefono'] = false;
			}
			

		break;

		case "ancho":
			if(expresiones.ancho.test(e.target.value)){
				document.getElementById('grupo__ancho').classList.remove('formulario__grupo-incorrecto');
				document.getElementById('grupo__ancho').classList.add('formulario__grupo-correcto');
				document.querySelector('#grupo__ancho i').classList.remove('fa-times-circle');
				document.querySelector('#grupo__ancho i').classList.add('fa-check-circle');
				document.querySelector('#grupo__ancho .formulario__input-error').classList.remove('formulario__input-error-activo');
				campos['ancho'] = true;
			}else{
				document.getElementById('grupo__ancho').classList.remove('formulario__grupo-correcto');
				document.getElementById('grupo__ancho').classList.add('formulario__grupo-incorrecto');
				document.querySelector('#grupo__ancho i').classList.remove('fa-check-circle');
				document.querySelector('#grupo__ancho i').classList.add('fa-times-circle');
				document.querySelector('#grupo__ancho .formulario__input-error').classList.add('formulario__input-error-activo');
				campos['ancho'] = false;
			}

		break;

		case "largo":
			if(expresiones.largo.test(e.target.value)){
				document.getElementById('grupo__largo').classList.remove('formulario__grupo-incorrecto');
				document.getElementById('grupo__largo').classList.add('formulario__grupo-correcto');
				document.querySelector('#grupo__largo i').classList.remove('fa-times-circle');
				document.querySelector('#grupo__largo i').classList.add('fa-check-circle');
				document.querySelector('#grupo__largo .formulario__input-error').classList.remove('formulario__input-error-activo');
				campos['largo'] = true;
			}else{
				document.getElementById('grupo__largo').classList.remove('formulario__grupo-correcto');
				document.getElementById('grupo__largo').classList.add('formulario__grupo-incorrecto');
				document.querySelector('#grupo__largo i').classList.remove('fa-check-circle');
				document.querySelector('#grupo__largo i').classList.add('fa-times-circle');
				document.querySelector('#grupo__largo .formulario__input-error').classList.add('formulario__input-error-activo');
				campos['largo'] = false;
			}

		break;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario  );
	input.addEventListener('blur', validarFormulario  );
});

formulario.addEventListener('submit', (e) => {
	var selection = document.getElementById("color");
	var sel = selection.options[selection.selectedIndex].value;

	if(sel != ""){
		campos["color"] = true;
	}else{
		campos["color"] = false;
	}
	if(document.getElementById("aluminio").checked){
		campos['material'] = true;
	}else if(document.getElementById("pvc").checked){
		campos['material'] = true;
	}else{
		campos['material'] = false;
	}

	if(document.getElementById("termopanel").checked){
		campos['ventana'] = true;
	 }else if(document.getElementById("vidrionormal").checked){
		campos['ventana'] = true;
	}else{
		campos['ventana'] = false;
	}
	

	if(campos.nombre && campos.apellido && campos.telefono && campos.ancho && campos.largo && campos.material && campos.ventana && campos.color){
	}else{
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
		e.preventDefault();
	}
});



