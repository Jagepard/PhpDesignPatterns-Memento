## Table of contents

- [\Behavioral\Memento\Caretaker](#class-behavioralmementocaretaker)
- [\Behavioral\Memento\CaretakerInterface (interface)](#interface-behavioralmementocaretakerinterface)
- [\Behavioral\Memento\Memento](#class-behavioralmementomemento)
- [\Behavioral\Memento\MementoInterface (interface)](#interface-behavioralmementomementointerface)
- [\Behavioral\Memento\Originator](#class-behavioralmementooriginator)
- [\Behavioral\Memento\OriginatorInterface (interface)](#interface-behavioralmementooriginatorinterface)

<hr />

### Class: \Behavioral\Memento\Caretaker

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\Behavioral\Memento\OriginatorInterface](#interface-behavioralmementooriginatorinterface)</em> <strong>$originator</strong>)</strong> : <em>void</em> |
| public | <strong>save()</strong> : <em>void</em> |
| public | <strong>undo()</strong> : <em>void</em> |

*This class implements [\Behavioral\Memento\CaretakerInterface](#interface-behavioralmementocaretakerinterface)*

<hr />

### Interface: \Behavioral\Memento\CaretakerInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>save()</strong> : <em>void</em> |
| public | <strong>undo()</strong> : <em>void</em> |

<hr />

### Class: \Behavioral\Memento\Memento

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$memento</strong>)</strong> : <em>void</em> |
| public | <strong>getMemento()</strong> : <em>mixed</em> |

*This class implements [\Behavioral\Memento\MementoInterface](#interface-behavioralmementomementointerface)*

<hr />

### Interface: \Behavioral\Memento\MementoInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getMemento()</strong> : <em>mixed</em> |

<hr />

### Class: \Behavioral\Memento\Originator

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getDate()</strong> : <em>mixed</em> |
| public | <strong>getState()</strong> : <em>mixed</em> |
| public | <strong>resetDate(</strong><em>\string</em> <strong>$date</strong>)</strong> : <em>void</em> |
| public | <strong>resetState(</strong><em>\string</em> <strong>$state</strong>)</strong> : <em>void</em> |
| public | <strong>setState(</strong><em>\string</em> <strong>$state</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Memento\OriginatorInterface](#interface-behavioralmementooriginatorinterface)*

<hr />

### Interface: \Behavioral\Memento\OriginatorInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getState()</strong> : <em>mixed</em> |
| public | <strong>setState(</strong><em>\string</em> <strong>$state</strong>)</strong> : <em>void</em> |

