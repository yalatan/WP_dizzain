const gulp = require('gulp');
const sass = require('gulp-sass');

gulp.task('sass', async function() { // Создаем таск "sass"
    return gulp.src('sass/style.sass') // Берем источник
        .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
        .pipe(gulp.dest('../wpDizzainTheme')) // Выгружаем результат style.css
});