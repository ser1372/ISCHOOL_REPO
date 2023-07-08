export let stateCoop = [];
if (window.location.href.includes('/en')) {
    stateCoop = [
        {
            img: 'reload',
            mainTitle: 'Help others find out about us',
            description: 'If you were satisfied with your studies with us, we would appreciate your recommendation to acquaintances and friends.',
        },
        {
            img: 'join',
            mainTitle: 'Join the Ischool team',
            description: 'Realize yourself as a professional tutor. Fill out the form and become a part of our team!',
        },
        {
            img: 'checkmark',
            mainTitle: 'Invite your friends and receive bonuses',
            description: 'Learning English with friends can be more enjoyable and productive.',
        }
    ];
} else {
    stateCoop = [
        {
            img: 'reload',
            mainTitle: 'Допоможи іншим дізнатись про нас',
            description: 'Якщо ти залишився задоволеним від навчання у нас, то ми будемо вдячні за рекомендацію знайомим та друзям',
        },
        {
            img: 'join',
            mainTitle: 'Приєднайся до команди Ischool',
            description: 'Реалізуй себе як професійного тьютора. Заповни форму і ставай частиною нашої команди!',
        },
        {
            img: 'checkmark',
            mainTitle: 'Приведи своїх друзів та отримай бонуси',
            description: 'З друзями процес вивчення англійської мови буде проходити з більшим задоволенням та прогресом',
        }
    ];
}