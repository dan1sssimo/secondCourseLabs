using System;
using System.Collections.Generic;
using System.Linq;

namespace SetLibrary
{
    public class Set
    {
        public List<float> Values { get; set;}

        public Set(IEnumerable<float> Value)
        {
            this.Values = Value.ToList();
        }

        public Set(string set)
        {
            try
            {
                this.Values = set.Split(',').Select(float.Parse).ToList();
            }
            catch
            {
                this.Values = new List<float>();
            }
        }

        public Set(params float[] Values)
        {
            this.Values = Values.ToList();
        }

        public Set Union(Set set)
        {
            var unionValues = Values.Union(set.Values).ToList();
            unionValues.Sort();
            return new Set(unionValues);
        }

        public Set Intersect(Set set)
        {
            var intersectValues = Values.Intersect(set.Values).ToList();
            intersectValues.Sort();
            return new Set(intersectValues);
        }

        public Set Differance(Set set)
        {
            var exceptValues = Values.Except(set.Values).ToList();
            exceptValues.Sort();
            return new Set(exceptValues);
        }

        public Set SymmetricDifference(Set set)
        {
            var symmetricDifferenceValues = this.Union(set).Values.Except(this.Intersect(set).Values).ToList();
            symmetricDifferenceValues.Sort();
            return new Set(symmetricDifferenceValues);
        }

        public override string ToString()
        {
            return string.Join(',', Values);
        }
    }
}
