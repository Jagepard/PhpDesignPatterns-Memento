## Table of contents

- [\Behavioral\Memento\OriginatorInterface (interface)](#interface-behavioralmementooriginatorinterface)
- [\Behavioral\Memento\MementoInterface (interface)](#interface-behavioralmementomementointerface)
- [\Behavioral\Memento\Memento](#class-behavioralmementomemento)
- [\Behavioral\Memento\TypeInterface (interface)](#interface-behavioralmementotypeinterface)
- [\Behavioral\Memento\Caretaker](#class-behavioralmementocaretaker)
- [\Behavioral\Memento\StateType](#class-behavioralmementostatetype)
- [\Behavioral\Memento\Originator](#class-behavioralmementooriginator)
- [\Behavioral\Memento\CaretakerInterface (interface)](#interface-behavioralmementocaretakerinterface)

<hr />

### Interface: \Behavioral\Memento\OriginatorInterface

> Interface OriginatorInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getState()</strong> : <em>[\Behavioral\Memento\TypeInterface](#interface-behavioralmementotypeinterface)</em> |
| public | <strong>printState()</strong> : <em>void</em> |
| public | <strong>setState(</strong><em>[\Behavioral\Memento\TypeInterface](#interface-behavioralmementotypeinterface)</em> <strong>$state</strong>)</strong> : <em>void</em> |

<hr />

### Interface: \Behavioral\Memento\MementoInterface

> Interface MementoInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\Behavioral\Memento\OriginatorInterface](#interface-behavioralmementooriginatorinterface)</em> <strong>$originator</strong>)</strong> : <em>void</em><br /><em>Memento constructor.</em> |
| public | <strong>getState()</strong> : <em>[\Behavioral\Memento\TypeInterface](#interface-behavioralmementotypeinterface)</em> |

<hr />

### Class: \Behavioral\Memento\Memento

> Class Memento

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\Behavioral\Memento\OriginatorInterface](#interface-behavioralmementooriginatorinterface)</em> <strong>$originator</strong>)</strong> : <em>void</em><br /><em>Memento constructor.</em> |
| public | <strong>getState()</strong> : <em>[\Behavioral\Memento\TypeInterface](#interface-behavioralmementotypeinterface)</em> |

*This class implements [\Behavioral\Memento\MementoInterface](#interface-behavioralmementomementointerface)*

<hr />

### Interface: \Behavioral\Memento\TypeInterface

> Interface TypeInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getName()</strong> : <em>string</em> |

<hr />

### Class: \Behavioral\Memento\Caretaker

> Class Caretaker

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getMemento()</strong> : <em>[\Behavioral\Memento\MementoInterface](#interface-behavioralmementomementointerface)</em> |
| public | <strong>setMemento(</strong><em>[\Behavioral\Memento\MementoInterface](#interface-behavioralmementomementointerface)</em> <strong>$memento</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Memento\CaretakerInterface](#interface-behavioralmementocaretakerinterface)*

<hr />

### Class: \Behavioral\Memento\StateType

> Class StateType

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>void</em><br /><em>StateType constructor.</em> |
| public | <strong>getName()</strong> : <em>string</em> |

*This class implements [\Behavioral\Memento\TypeInterface](#interface-behavioralmementotypeinterface)*

<hr />

### Class: \Behavioral\Memento\Originator

> Class Originator

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getState()</strong> : <em>[\Behavioral\Memento\TypeInterface](#interface-behavioralmementotypeinterface)</em> |
| public | <strong>printState()</strong> : <em>void</em> |
| public | <strong>setState(</strong><em>[\Behavioral\Memento\TypeInterface](#interface-behavioralmementotypeinterface)</em> <strong>$state</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Memento\OriginatorInterface](#interface-behavioralmementooriginatorinterface)*

<hr />

### Interface: \Behavioral\Memento\CaretakerInterface

> Interface CaretakerInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getMemento()</strong> : <em>[\Behavioral\Memento\MementoInterface](#interface-behavioralmementomementointerface)</em> |
| public | <strong>setMemento(</strong><em>[\Behavioral\Memento\MementoInterface](#interface-behavioralmementomementointerface)</em> <strong>$memento</strong>)</strong> : <em>void</em> |

