<script setup>
import {defineExpose, ref} from 'vue';
import Input from '@/Components/Input.vue';
import Button from '@/Components/Button.vue';

const isOpen = ref(false);

const openModal = () => {
	isOpen.value = true;
};

const closeModal = () => {
	isOpen.value = false;
};

defineExpose({openModal, closeModal}); // Экспонируем эти функции для использования в родительском компоненте
</script>

<template>
	<transition name="modal">
		<div v-if="isOpen"
				 class="z-[9998] bg-black bg-opacity-50 w-full h-full flex justify-center items-center fixed top-0 left-0">
			<div class="bg-white p-[20px] pb-[65px] m-[20px]  rounded-[36px] w-[1100px] ">
				<button class="float-right text-[40px]" @click="closeModal">X</button>
				<div class="max-w-7xl modal mt-[40px] lg:px-[5rem] mx-auto">
					<h2 class="text-4xl font-semibold mb-[40px]">{{ $t("modal.education") }}</h2>
					<div class="grid lg:grid-cols-2 grid-cols-1">
						<div class="col-1">
							<p class="max-w-[345px] text-lg font-medium">{{ $t("modal.write") }}</p>
						</div>
						<div class="col-2">
							<form action="" method="post">
								<div class="mb-[24px]">
									<label for="name">{{ $t("modal.form_data.name") }}</label>
									<Input id="name" placeholder="Наприклад, Олег Микитенко"/>
								</div>
								<div class="mb-[24px]">
									<label for="tel">{{ $t("modal.form_data.tel") }}</label>
									<Input id="tel" placeholder="+380 XXX XXX XXX aбо @nickname"/>
								</div>
								<div class="mb-[24px]">
									<label for="email">E-mail</label>
									<Input id="email" type="email" placeholder="example@gmail.com"/>
								</div>
								<div class="mb-[24px]">
									<label for="email">{{ $t("modal.form_data.how") }}</label>
									<select id="countries"
													class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
										<option value="US">Telegram</option>
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


