## Table of contents
- [Behavioral\Memento\Caretaker](#behavioral_memento_caretaker)
- [Behavioral\Memento\CaretakerInterface](#behavioral_memento_caretakerinterface)
- [Behavioral\Memento\Memento](#behavioral_memento_memento)
- [Behavioral\Memento\MementoInterface](#behavioral_memento_mementointerface)
- [Behavioral\Memento\Originator](#behavioral_memento_originator)
- [Behavioral\Memento\OriginatorInterface](#behavioral_memento_originatorinterface)
<hr>

<a id="behavioral_memento_caretaker"></a>

### Class: Behavioral\Memento\Caretaker
##### implements [Behavioral\Memento\CaretakerInterface](#behavioral_memento_caretakerinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( Behavioral\Memento\OriginatorInterface $originator )</em><br>Accepts an object<br>Принимает объект в работу|
|public|<em><strong>undo</strong>(): void</em><br>Restores the previous state<br>Восстанавливает предыдущее состояние|
|public|<em><strong>save</strong>(): void</em><br>Stores data about the current state of an object<br>Сохраняет данные о текущем состоянии объекта|


<a id="behavioral_memento_caretakerinterface"></a>

### Class: Behavioral\Memento\CaretakerInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>undo</strong>(): void</em><br>|
|abstract public|<em><strong>save</strong>(): void</em><br>|


<a id="behavioral_memento_memento"></a>

### Class: Behavioral\Memento\Memento
##### implements [Behavioral\Memento\MementoInterface](#behavioral_memento_mementointerface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( array $memento )</em><br>Receives data about the current state of an object<br>Принимает данные о текущем состоянии объекта|
|public|<em><strong>getMemento</strong>(): array</em><br>Gets the persisted data about the state of an object<br>Получает сохраненные данные о состоянии объекта|


<a id="behavioral_memento_mementointerface"></a>

### Class: Behavioral\Memento\MementoInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>getMemento</strong>(): array</em><br>|


<a id="behavioral_memento_originator"></a>

### Class: Behavioral\Memento\Originator
##### implements [Behavioral\Memento\OriginatorInterface](#behavioral_memento_originatorinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>setState</strong>( string $state  ?string $date ): void</em><br>Sets the current state of the object and fixes the installation time<br>Устанавливает текущее состояние объекта и фиксирует время установки|
|public|<em><strong>getState</strong>(): string</em><br>Gets the current state<br>Получает данные о текущем состоянии|
|public|<em><strong>getDate</strong>(): string</em><br>Gets the commit time of the current state<br>Получает время фиксации текущего состояния|
|public|<em><strong>printLog</strong>( string $addlInfo ): void</em><br>Displays information about the current state<br>Выводит информацию о текущем состоянии|


<a id="behavioral_memento_originatorinterface"></a>

### Class: Behavioral\Memento\OriginatorInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>getState</strong>(): string</em><br>|
|abstract public|<em><strong>setState</strong>( string $state  ?string $date ): void</em><br>|
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
