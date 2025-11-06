#!/usr/bin/env php
<?php
// Простейшее консольное приложение для демонстрации ветвления
// Переменные для чисел
$a = null;
$b = null;

function enterNumbers()
{
	// TODO: реализовано в ветке `enter-numbers`
	echo "[enterNumbers] not implemented yet. Переключитесь на ветку enter-numbers.\n";
}

function add()
{
	// TODO: реализовано в ветке `add`
	echo "[add] not implemented yet. Переключитесь на ветку add.\n";
}

function subtract()
{
	// TODO: реализовано в ветке `subtract`
	echo "[subtract] not implemented yet. Переключитесь на ветку subtract.\n";
}

function divide()
{
	// TODO: реализовано в ветке `divide`
	echo "[divide] not implemented yet. Переключитесь на ветку divide.\n";
}

function power()
{
	global $a, $b;
	if ($a === null || $b === null) {
		echo "Сначала введите два числа (пункт 1).\n";
		return;
	}
	// возводим a в степень b
	$result = pow($a, $b);
	echo "{$a} в степени {$b} = {$result}\n";
}

function showMenu()
{
	echo "--- Меню ---\n";
	echo "1) Ввести два числа\n";
	echo "2) Выполнить сложение\n";
	echo "3) Выполнить вычитание\n";
	echo "4) Выполнить деление\n";
	echo "5) Возвести число в степень\n";
	echo "0) Выход\n";
	echo "Выберите пункт: ";
}

// Главный цикл
while (true) {
	showMenu();
	$choice = trim(fgets(STDIN));
	switch ($choice) {
		case '1':
			enterNumbers();
			break;
		case '2':
			add();
			break;
		case '3':
			subtract();
			break;
		case '4':
			divide();
			break;
		case '5':
			power();
			break;
		case '0':
			echo "Выход.\n";
			exit(0);
		default:
			echo "Неверный выбор.\n";
	}
	echo "\n";
}
