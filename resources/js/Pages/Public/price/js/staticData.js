/* *
*
* START STATIC DATA ARRAYS
*
* */

export const ItemsLevel = [
    'A1', 'A2', 'B1',
    'B2', 'C1', 'C2',
    'А1-А2', 'B1-B2', 'C1-C2',
];

export const ItemsLessons = [
    'Lessons',
    'Lessons',
    'Speaking Club'
];

export const ItemsLevelEnglish = [
    'Beginner-Intermediate',
    'Upper-Intermediate-Advanced',
    'Beginner-Advanced'
];

export let ItemsDescription = [];
if (window.location.href.includes('/en')) {
    ItemsDescription = [
        'Learning English at the A1-B1 level will enable you to communicate easily with English-speaking people and gain new opportunities',
        'Personal development plan.',
        'The price of the course depends on the number of lessons per week',
        'Learning English at the B2-C1 level will open up opportunities for your career and personal growth',
        'Personal development plan.',
        'The price of the course depends on the number of lessons per week',
        'Speaking Club is a great opportunity to improve your English speaking skills and gain more confidence with native speakers.'
    ];
} else {
    ItemsDescription = [
        'Вивчення англійської на рівні А1-В1 дозволить вам легко спілкуватись з англомовними людьми та отримати нові можливості',
        'Особистий план розвитку',
        'Ціна курсу залежить від кількості занять на тиждень',
        'Вивчення англійської на рівні B2-C1 відкриє для вас можливості для карʼєрного та особистісного зростання',
        'Особистий план розвитку',
        'Ціна курсу залежить від кількості занять на тиждень',
        'Speaking clubs - це чудова можливість покращити свої розмовні навички англійської мови та отримати більше впевненості з носіями мови'
    ];
}

/* *
*
* END STATIC DATA ARRAYS
*
* */
