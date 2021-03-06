<?php

/**
 * Test: Nette\Latte\MacroTokenizer::fetchWord()
 *
 * @author     David Grudl
 * @package    Nette\Latte
 */

use Nette\Latte\MacroTokenizer;



require __DIR__ . '/../bootstrap.php';



$tokenizer = new MacroTokenizer('');
Assert::same( FALSE,  $tokenizer->fetchWord() );
Assert::same( FALSE,  $tokenizer->fetchAll() );

$tokenizer = new MacroTokenizer('$1d-,a');
Assert::same( '$1d-',  $tokenizer->fetchWord() );
Assert::same( 'a',  $tokenizer->fetchAll() );

$tokenizer = new MacroTokenizer('"item\'1""item2"');
Assert::same( '"item\'1""item2"',  $tokenizer->fetchWord() );
Assert::same( FALSE,  $tokenizer->fetchAll() );
