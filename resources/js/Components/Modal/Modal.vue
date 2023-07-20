<script setup>
import {defineExpose, onMounted, onUnmounted, reactive, ref} from 'vue';
import Input from '@/Components/Input.vue';
import Button from '@/Components/Button.vue';
import Swal from 'sweetalert2';
import {useI18n} from 'vue-i18n';

const {t} = useI18n();

const formData = reactive({
	name: '',
	tel: '',
	email: '',
	source: '',
	city: '',
	country: '',
});

const submitForm = async () => {
	try {
		// Запрос к ipinfo.io для получения информации о городе и стране
		const ipResponse = await axios.get('https://ipinfo.io/json?token=ee4cfae6f20f02');
		const {city, country} = ipResponse.data;

		const response = await axios.post('/api/v1/student/create', {
			name: formData.name,
			tel: formData.tel,
			email: formData.email,
			source: formData.source,
			city,
			country,
		});
		resetData();
		closeModal();

		Swal.fire({
			title: t("swal.title_success"),
			icon: 'success',
			width: 600,
			padding: '3em',
			color: '#716add',
			background: '#fff',
			backdrop: `
    rgba(0,0,123,0.4)
    url("https://sweetalert2.github.io/images/nyan-cat.gif")
    left top
    no-repeat
  `
		});
	} catch (error) {
		Swal.fire({
			title: t("swal.title_error"),
			icon: 'error',
			width: 600,
			padding: '3em',
			color: '#716add',
			background: '#fff',
			backdrop: `
    rgba(0,0,123,0.4)
    left top
    no-repeat
  `
		});
		console.error(error);
	}
};


const outerClick = e => {
	if (!e.target.closest('.modal')) {
		closeModal();
	}
};

function resetData() {
	formData.name = '';
	formData.tel = '';
	formData.email = '';
	formData.source = '';
	formData.city = '';
	formData.country = '';
}


const isOpen = ref(false);

const openModal = () => {
	isOpen.value = true;
	document.body.classList.add('no-scroll');
};

const closeModal = () => {
	isOpen.value = false;
	document.body.classList.remove('no-scroll');
};

const handleEscape = e => {
	if (e.key === 'Escape') {
		closeModal();
	}
};


onMounted(() => {
	document.addEventListener('keydown', handleEscape);
});

onUnmounted(() => {
	document.removeEventListener('keydown', handleEscape);
});


defineExpose({openModal, closeModal}); // Экспонируем эти функции для использования в родительском компоненте
</script>

<template>
	<transition name="modal">
		<div v-if="isOpen" :key="isOpen"
				 class="z-[9998] bg-black bg-opacity-50 w-full h-full flex justify-center items-center fixed top-0 left-0"
				 @click="outerClick">
			<div class="bg-white p-[20px] pb-[65px] m-[20px]  rounded-[36px] w-[1100px] ">
				<button class="float-right text-[40px]" @click="closeModal">X</button>
				<div class="max-w-7xl modal mt-[40px] lg:px-[5rem] mx-auto">
					<h2 class="text-4xl font-semibold mb-[40px]">{{ $t("modal.education") }}</h2>
					<div class="grid lg:grid-cols-2 grid-cols-1">
						<div class="col-1">
							<p class="max-w-[345px] text-lg font-medium">{{ $t("modal.write") }}</p>
						</div>
						<div class="col-2">
							<form @submit.prevent="submitForm">
								<div class="mb-[24px]">
									<label for="name">{{ $t("modal.form_data.name") }}</label>
									<Input v-model="formData.name" id="name" :placeholder="$t('modal.placeholders.name')"/>
								</div>
								<div class="mb-[24px]">
									<label for="tel">{{ $t("modal.form_data.tel") }}</label>
									<Input v-model="formData.tel" id="tel" :placeholder="$t('modal.placeholders.tel')"/>
								</div>
								<div class="mb-[24px]">
									<label for="email">E-mail</label>
									<Input v-model="formData.email" id="email" type="email" placeholder="example@gmail.com"/>
								</div>
								<div class="mb-[24px]">
									<label for="source">{{ $t("modal.form_data.how") }}</label>
									<select v-model="formData.source" required id="source"
													class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
										<option value="Telegram">Telegram</option>
										<option value="Instagram">Instagram</option>
										<option value="Facebook">Facebook</option>
										<option value="Google">Google</option>
									</select>
								</div>
								<Button class="w-full">{{ $t("modal.submit") }}</Button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</transition>
</template>

<style scoped>
.modal-enter-active, .modal-leave-active {
	transition: opacity .5s;
}

.modal-enter, .modal-leave-to {
	opacity: 0;
}
</style>


