## Table of contents

- [\Behavioral\Memento\OriginatorInterface (interface)](#interface-behavioralmementooriginatorinterface)
- [\Behavioral\Memento\MementoInterface (interface)](#interface-behavioralmementomementointerface)
- [\Behavioral\Memento\Memento](#class-behavioralmementomemento)
- [\Behavioral\Memento\Caretaker](#class-behavioralmementocaretaker)
- [\Behavioral\Memento\Originator](#class-behavioralmementooriginator)
- [\Behavioral\Memento\CaretakerInterface (interface)](#interface-behavioralmementocaretakerinterface)

<hr />

### Interface: \Behavioral\Memento\OriginatorInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getState()</strong> : <em>string</em> |
| public | <strong>setState(</strong><em>\string</em> <strong>$state</strong>)</strong> : <em>void</em> |

<hr />

### Interface: \Behavioral\Memento\MementoInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\Behavioral\Memento\OriginatorInterface](#interface-behavioralmementooriginatorinterface)</em> <strong>$originator</strong>)</strong> : <em>void</em><br /><em>Memento constructor.</em> |
| public | <strong>getState()</strong> : <em>string</em> |

<hr />

### Class: \Behavioral\Memento\Memento

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\Behavioral\Memento\OriginatorInterface](#interface-behavioralmementooriginatorinterface)</em> <strong>$originator</strong>)</strong> : <em>void</em><br /><em>Memento constructor.</em> |
| public | <strong>getState()</strong> : <em>string</em> |

*This class implements [\Behavioral\Memento\MementoInterface](#interface-behavioralmementomementointerface)*

<hr />

### Class: \Behavioral\Memento\Caretaker

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getMemento()</strong> : <em>[\Behavioral\Memento\MementoInterface](#interface-behavioralmementomementointerface)</em> |
| public | <strong>setMemento(</strong><em>[\Behavioral\Memento\MementoInterface](#interface-behavioralmementomementointerface)</em> <strong>$memento</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Memento\CaretakerInterface](#interface-behavioralmementocaretakerinterface)*

<hr />

### Class: \Behavioral\Memento\Originator

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getState()</strong> : <em>string</em> |
| public | <strong>setState(</strong><em>\string</em> <strong>$state</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Memento\OriginatorInterface](#interface-behavioralmementooriginatorinterface)*

<hr />

### Interface: \Behavioral\Memento\CaretakerInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getMemento()</strong> : <em>[\Behavioral\Memento\MementoInterface](#interface-behavioralmementomementointerface)</em> |
| public | <strong>setMemento(</strong><em>[\Behavioral\Memento\MementoInterface](#interface-behavioralmementomementointerface)</em> <strong>$memento</strong>)</strong> : <em>void</em> |

