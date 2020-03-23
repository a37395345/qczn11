<?php
defined('PATH_BASE') or die;

/**
 * Query Element Class.
 *
 * @package		Imag.Framework
 * @subpackage	Database
 */
class QueryElement
{
	/**
	 * @var		string	The name of the element.
	 */
	protected $_name = null;

	/**
	 * @var		array	An array of elements.
	 */
	protected $_elements = null;

	/**
	 * @var		string	Glue piece.
	 */
	protected $_glue = null;

	/**
	 * Constructor.
	 *
	 * @param	string	$name		The name of the element.
	 * @param	mixed	$elements	String or array.
	 * @param	string	$glue		The glue for elements.
	 *
	 * @return	QueryElement
	 */
	public function __construct($name, $elements, $glue = ',')
	{
		$this->_elements	= array();
		$this->_name		= $name;
		$this->_glue		= $glue;

		$this->append($elements);
	}

	/**
	 * Magic function to convert the query element to a string.
	 *
	 * @return	string
	 */
	public function __toString()
	{
		return PHP_EOL.$this->_name.' '.implode($this->_glue, $this->_elements);
	}

	/**
	 * Appends element parts to the internal list.
	 *
	 * @param	mixed	String or array.
	 *
	 * @return	void
	 */
	public function append($elements)
	{
		if (is_array($elements)) {
			$this->_elements = array_unique(array_merge($this->_elements, $elements));
		}
		else {
			$this->_elements = array_unique(array_merge($this->_elements, array($elements)));
		}
	}
}

/**
 * Query Building Class.
 *
 * @package		Joomla.Framework
 * @subpackage	Database
 */
class Query
{
	/**
	 * @var		string	The query type.
	 */
	protected $_type = '';

	/**
	 * @var		object	The select element.
	 */
	protected $_select = null;

	/**
	 * @var		object	The delete element.
	 */
	protected $_delete = null;

	/**
	 * @var		object	The update element.
	 */
	protected $_update = null;

	/**
	 * @var		object	The insert element.
	 */
	protected $_insert = null;

	/**
	 * @var		object	The from element.
	 */
	protected $_from = null;

	/**
	 * @var		object	The join element.
	 */
	protected $_join = null;

	/**
	 * @var		object	The set element.
	 */
	protected $_set = null;

	/**
	 * @var		object	The where element.
	 */
	protected $_where = null;

	/**
	 * @var		object	The group by element.
	 */
	protected $_group = null;

	/**
	 * @var		object	The having element.
	 */
	protected $_having = null;

	/**
	 * @var		object	The order element.
	 */
	protected $_order = null;

	/**
	 * Clear data from the query or a specific clause of the query.
	 *
	 * @param	string	$clear	Optionally, the name of the clause to clear, or nothing to clear the whole query.
	 *
	 * @return	void
	 */
	public function clear($clause = null)
	{
		switch ($clause)
		{
			case 'select':
				$this->_select = null;
				$this->_type = null;
				break;

			case 'delete':
				$this->_delete = null;
				$this->_type = null;
				break;

			case 'update':
				$this->_update = null;
				$this->_type = null;
				break;

			case 'insert':
				$this->_insert = null;
				$this->_type = null;
				break;

			case 'from':
				$this->_from = null;
				break;

			case 'join':
				$this->_join = null;
				break;

			case 'set':
				$this->_set = null;
				break;

			case 'where':
				$this->_where = null;
				break;

			case 'group':
				$this->_group = null;
				break;

			case 'having':
				$this->_having = null;
				break;

			case 'order':
				$this->_order = null;
				break;

			default:
				$this->_type = null;
				$this->_select = null;
				$this->_delete = null;
				$this->_udpate = null;
				$this->_insert = null;
				$this->_from = null;
				$this->_join = null;
				$this->_set = null;
				$this->_where = null;
				$this->_group = null;
				$this->_having = null;
				$this->_order = null;
				break;
		}

		return $this;
	}


	/**
	 * @param	mixed	$columns	A string or an array of field names.
	 *
	 * @return	Query	Returns this object to allow chaining.
	 */
	public function select($columns)
	{
		$this->_type = 'select';

		if (is_null($this->_select)) {
			$this->_select = new QueryElement('SELECT', $columns);
		}
		else {
			$this->_select->append($columns);
		}

		return $this;
	}

	/**
	 * @param	string	$table	The name of the table to delete from.
	 *
	 * @return	Query	Returns this object to allow chaining.
	 */
	public function delete($table = null)
	{
		$this->_type	= 'delete';
		$this->_delete	= new QueryElement('DELETE', null);

		if (!empty($table)) {
			$this->from($table);
		}

		return $this;
	}

	/**
	 * @param	mixed	$tables	A string or array of table names.
	 *
	 * @return	Query	Returns this object to allow chaining.
	 */
	public function insert($tables)
	{
		$this->_type	= 'insert';
		$this->_insert	= new QueryElement('INSERT INTO', $tables);

		return $this;
	}

	/**
	 * @param	mixed	$tables	A string or array of table names.
	 *
	 * @return	Query	Returns this object to allow chaining.
	 */
	public function update($tables)
	{
		$this->_type = 'update';
		$this->_update = new QueryElement('UPDATE', $tables);

		return $this;
	}

	/**
	 * @param	mixed	A string or array of table names.
	 *
	 * @return	Query	Returns this object to allow chaining.
	 */
	public function from($tables)
	{
		if (is_null($this->_from)) {
			$this->_from = new QueryElement('FROM', $tables);
		}
		else {
			$this->_from->append($tables);
		}

		return $this;
	}

	/**
	 * @param	string	$type
	 * @param	string	$conditions
	 *
	 * @return	Query	Returns this object to allow chaining.
	 */
	public function join($type, $conditions)
	{
		if (is_null($this->_join)) {
			$this->_join = array();
		}
		$this->_join[] = new QueryElement(strtoupper($type) . ' JOIN', $conditions);

		return $this;
	}

	/**
	 * @param	string	$conditions
	 *
	 * @return	Query	Returns this object to allow chaining.
	 */
	public function innerJoin($conditions)
	{
		$this->join('INNER', $conditions);

		return $this;
	}

	/**
	 * @param	string	$conditions
	 *
	 * @return	Query	Returns this object to allow chaining.
	 */
	public function outerJoin($conditions)
	{
		$this->join('OUTER', $conditions);

		return $this;
	}

	/**
	 * @param	string	$conditions
	 *
	 * @return	Query	Returns this object to allow chaining.
	 */
	public function leftJoin($conditions)
	{
		$this->join('LEFT', $conditions);

		return $this;
	}

	/**
	 * @param	string	$conditions
	 *
	 * @return	Query	Returns this object to allow chaining.
	 */
	public function rightJoin($conditions)
	{
		$this->join('RIGHT', $conditions);

		return $this;
	}

	/**
	 * @param	mixed	$conditions	A string or array of conditions.
	 * @param	string	$glue
	 *
	 * @return	Query	Returns this object to allow chaining.
	 */
	public function set($conditions, $glue=',')
	{
		if (is_null($this->_set)) {
			$glue = strtoupper($glue);
			$this->_set = new QueryElement('SET', $conditions, "\n\t$glue ");
		}
		else {
			$this->_set->append($conditions);
		}

		return $this;
	}

	/**
	 * @param	mixed	$conditions	A string or array of where conditions.
	 * @param	string	$glue
	 *
	 * @return	Query	Returns this object to allow chaining.
	 */
	public function where($conditions, $glue='AND')
	{
		if (is_null($this->_where)) {
			$glue = strtoupper($glue);
			$this->_where = new QueryElement('WHERE', $conditions, " $glue ");
		}
		else {
			$this->_where->append($conditions);
		}

		return $this;
	}

	/**
	 * @param	mixed	$columns	A string or array of ordering columns.
	 *
	 * @return	Query	Returns this object to allow chaining.
	 */
	public function group($columns)
	{
		if (is_null($this->_group)) {
			$this->_group = new QueryElement('GROUP BY', $columns);
		}
		else {
			$this->_group->append($columns);
		}

		return $this;
	}

	/**
	 * @param	mixed	$conditions	A string or array of columns.
	 * @param	string	$glue
	 *
	 * @return	Query	Returns this object to allow chaining.
	 */
	public function having($conditions, $glue='AND')
	{
		if (is_null($this->_having)) {
			$glue = strtoupper($glue);
			$this->_having = new QueryElement('HAVING', $conditions, " $glue ");
		}
		else {
			$this->_having->append($conditions);
		}

		return $this;
	}

	/**
	 * @param	mixed	$columns	A string or array of ordering columns.
	 *
	 * @return	Query	Returns this object to allow chaining.
	 */
	public function order($columns)
	{
		if (is_null($this->_order)) {
			$this->_order = new QueryElement('ORDER BY', $columns);
		}
		else {
			$this->_order->append($columns);
		}

		return $this;
	}

	/**
	 * Magic function to convert the query to a string.
	 *
	 * @return	string	The completed query.
	 */
	public function __toString()
	{
		$query = '';

		switch ($this->_type)
		{
			case 'select':
				$query .= (string) $this->_select;
				$query .= (string) $this->_from;
				if ($this->_join) {
					// special case for joins
					foreach ($this->_join as $join) {
						$query .= (string) $join;
					}
				}

				if ($this->_where) {
					$query .= (string) $this->_where;
				}

				if ($this->_group) {
					$query .= (string) $this->_group;
				}

				if ($this->_having) {
					$query .= (string) $this->_having;
				}

				if ($this->_order) {
					$query .= (string) $this->_order;
				}

				break;

			case 'delete':
				$query .= (string) $this->_delete;
				$query .= (string) $this->_from;

				if ($this->_join) {
					// special case for joins
					foreach ($this->_join as $join) {
						$query .= (string) $join;
					}
				}

				if ($this->_where) {
					$query .= (string) $this->_where;
				}

				break;

			case 'update':
				$query .= (string) $this->_update;
				$query .= (string) $this->_set;

				if ($this->_where) {
					$query .= (string) $this->_where;
				}

				break;

			case 'insert':
				$query .= (string) $this->_insert;
				$query .= (string) $this->_set;

				if ($this->_where) {
					$query .= (string) $this->_where;
				}

				break;
		}

		return $query;
	}
}