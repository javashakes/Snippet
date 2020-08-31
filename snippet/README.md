# Snippet

Wrap a block of test in the tag pair. The plugin will strip the tags and return a preview of the block with the total number of characters as set by the 'total' parameter. If the original text was longer than the total ellipsis will be added.

**Orignally developed by:** <a href="https://github.com/dpdexter" target="_blank" title="David Dexter on GitHub">David Dexter</a> of <a href="http://www.codesly.com" target="_blank" title="Check out David Dexter's company!">Codesly</a>.

*Orignal plugin (EE 1x and 2x) can be downloaded for free at <a href="https://devot-ee.com/add-ons/snippet" target="_blank" title="Visit devot:ee">devot:ee</a>.*

## Requirements

ExpressionEngine v2+

*Compatible with EE v2-5*

## Installation

- **EE v2:** Copy `snippet` directory into `/system/expressionengine/third_party/`
- **EE v3:** Copy `snippet` directory into `/system/user/addons/`
- **EE v4:** Copy `snippet` directory into `/system/user/addons/`
- **EE v5:** Copy `snippet` directory into `/system/user/addons/`

## Usage

### `{exp:snippet}`

Logs in a specified user.

##### `total` *(optional)*

Character limit

- **Type:** int
- **Default:** `500`

##### `worod` *(optional)*

Tells the plugin if you want it to end the snippet on the last full word.

- **Type:** int
- **Default:** `TRUE`

##### `ellipsis` *(optional)*

Any text that you want appended to the end of the snippet.

- **Type:** int
- **Default:** `...`

#### Examples

```
{exp:snippet total="100" word="true" ellipsis="..."}

The block of text that you want to snippet.

{/exp:snippet}

```

## Changelog

### 3.0.0 *(2020-08-31)*

- ExpressionEngine 3+ compatibility
- Overhauled documentation
- Added License
- Added Disclaimer

### 2.3.1 *(~2015-04-15)*

- Last known update

## License

Copyright © Matthew Kirkpatrick and individual contributors. All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
3. Neither the name of the author nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.

## Disclaimer

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS “AS IS” AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
