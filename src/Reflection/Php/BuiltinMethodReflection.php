<?php declare(strict_types = 1);

namespace PHPStan\Reflection\Php;

use PHPStan\TrinaryLogic;

interface BuiltinMethodReflection
{

	public function getName(): string;

	/**
	 * @return string|false
	 */
	public function getFileName();

	public function getDeclaringClass(): \ReflectionClass;

	/**
	 * @return int|false
	 */
	public function getStartLine();

	/**
	 * @return int|false
	 */
	public function getEndLine();

	public function getDocComment(): ?string;

	public function isStatic(): bool;

	public function isPrivate(): bool;

	public function isPublic(): bool;

	public function getPrototype(): self;

	public function isDeprecated(): TrinaryLogic;

	public function isVariadic(): bool;

	public function getReturnType(): ?\ReflectionType;

	/**
	 * @return \ReflectionParameter[]
	 */
	public function getParameters(): array;

	public function isFinal(): bool;

	public function isInternal(): bool;

	public function isAbstract(): bool;

}
